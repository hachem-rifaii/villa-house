<?php

namespace App\Livewire\Home;

use App\Models\Category;
use App\Models\Featured;
use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\RateLimiter;

class RentPage extends Component
{
    use WithPagination;

    // Public properties with type hints
    public string $search = '';
    public string $sortBy = '';
    public array $category = [];
    public array $featuresArr = [];
    public array $priceRanges = [
        'low' => false,
        'medium' => false,
        'high' => false,
    ];
    public ?float $minPrice = null;
    public ?float $maxPrice = null;
    public ?string $bed_bath = null;
    public $page = 1;

    // Validation rules
    protected $rules = [
        'search' => 'nullable|string|max:255',
        'sortBy' => 'nullable|in:,low_high,high_low,new',
        'category' => 'array',
        'category.*' => 'integer|exists:categories,id',
        'featuresArr' => 'array',
        'featuresArr.*' => 'integer|exists:featureds,id',
        'priceRanges.low' => 'boolean',
        'priceRanges.medium' => 'boolean',
        'priceRanges.high' => 'boolean',
        'minPrice' => 'nullable|numeric|min:0',
        'maxPrice' => 'nullable|numeric|min:0|gte:minPrice',
        'bed_bath' => 'nullable|in:single,double,upto3,upto5'
    ];

    // Query string parameters
    protected $queryString = [
        'search' => ['except' => '', 'as' => 'q'],
        'sortBy' => ['except' => ''],
        'category' => ['except' => [], 'as' => 'cat'],
        'featuresArr' => ['except' => [], 'as' => 'featuresArr'],
        'priceRanges' => ['except' => [], 'as' => 'price_range'],
        'minPrice' => ['except' => ''],
        'maxPrice' => ['except' => ''],
        'bed_bath' => ['except' => ''],
        'page' => ['except' => 1] 
    ];

    // Maximum allowed items per page
    protected $maxPerPage = 50;

    // public function mount()
    // {
    //     $this->middleware('auth'); // If authentication is required
    // }
    public function mount()
    {
        // Convert URL string parameters to arrays
        $this->category = is_array($this->category) ? $this->category : explode(',', $this->category);
        $this->featuresArr = is_array($this->featuresArr) ? $this->featuresArr : explode(',', $this->featuresArr);
        
        // Ensure arrays contain only integers
        $this->category = array_filter(array_map('intval', $this->category));
        $this->featuresArr = array_filter(array_map('intval', $this->featuresArr));
    
        // Fix priceRanges boolean values from URL strings
        if (is_array($this->priceRanges)) {
            foreach ($this->priceRanges as $key => $value) {
                if (is_string($value)) {
                    $this->priceRanges[$key] = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                }
            }
        } else {
            $this->priceRanges = [
                'low' => false,
                'medium' => false,
                'high' => false
            ];
        }
    }
 


    public function updated($propertyName, $value)
    {
        // Validate input when properties change
        $this->validateOnly($propertyName);

        // Reset pagination when filters change
        if (!in_array($propertyName, ['page'])) {
            $this->resetPage();
        }

        // Rate limit sensitive operations
        if (in_array($propertyName, ['search', 'category', 'featuresArr'])) {
            $this->validateRateLimit();
        }
    }

    protected function validateRateLimit($maxAttempts = 10)
    {
        $key = 'filter_attempts_'.request()->ip();
        
        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            abort(429, 'Too many requests');
        }

        RateLimiter::hit($key);
    }

    protected function sanitizeArrays()
    {
        // Sanitize category IDs
        $this->category = array_map('intval', $this->category);
        $this->category = array_unique($this->category);
        $this->category = array_slice($this->category, 0, 50); // Limit to 50 categories

        // Sanitize feature IDs
        $this->featuresArr = array_map('intval', $this->featuresArr);
        $this->featuresArr = array_unique($this->featuresArr);
        $this->featuresArr = array_slice($this->featuresArr, 0, 50); // Limit to 50 features
    }

    public function render()
    {
        $this->sanitizeArrays();
        $this->validate();
    
        try {
            // Start with base query
            $query = Property::query()->where('is_for_sale', false);
    
            // Apply all filters
            $query->when($this->search, function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->sortBy === 'low_high', function ($q) {
                $q->withAggregate(['prices as usd_price' => function ($q) {
                    $q->whereHas('currency', fn($q) => $q->where('code', 'USD'));
                }], 'min(price)')->orderBy('usd_price', 'asc');
            })
            ->when($this->sortBy === 'high_low', function ($q) {
                $q->withAggregate(['prices as usd_price' => function ($q) {
                    $q->whereHas('currency', fn($q) => $q->where('code', 'USD'));
                }], 'max(price)')->orderBy('usd_price', 'desc');
            })
            ->when(!empty($this->category), function ($q) {
                $q->whereHas('category', fn($q) => $q->whereIn('category_id', $this->category));
            })
            ->when(!empty($this->featuresArr), function ($q) {
                $q->whereHas('featureds', fn($q) => $q->whereIn('featured_id', $this->featuresArr));
            })
            ->when($this->priceRanges['low'], function ($q) {
                $q->whereHas('prices', fn($q) => $q->whereBetween('price', [5000, 10000])
                    ->whereHas('currency', fn($q) => $q->where('code', 'USD')));
            })
            ->when($this->priceRanges['medium'], function ($q) {
                $q->whereHas('prices', fn($q) => $q->whereBetween('price', [10000, 30000])
                    ->whereHas('currency', fn($q) => $q->where('code', 'USD')));
            })
            ->when($this->priceRanges['high'], function ($q) {
                $q->whereHas('prices', fn($q) => $q->where('price', '>=', 30000)
                    ->whereHas('currency', fn($q) => $q->where('code', 'USD')));
            })
            ->when($this->minPrice || $this->maxPrice, function ($q) {
                $q->whereHas('prices', function ($q) {
                    $q->whereHas('currency', fn($q) => $q->where('code', 'USD'));
                    if ($this->minPrice) $q->where('price', '>=', floatval($this->minPrice));
                    if ($this->maxPrice) $q->where('price', '<=', floatval($this->maxPrice));
                });
            })
            ->when($this->bed_bath, function ($q) {
                match ($this->bed_bath) {
                    'single' => $q->where('bedrooms', 1)->orWhere('bathrooms', 1),
                    'double' => $q->where('bedrooms', 2)->orWhere('bathrooms', 2),
                    'upto3' => $q->whereBetween('bedrooms', [3, 4])->orWhereBetween('bathrooms', [3, 4]),
                    'upto5' => $q->where('bedrooms', '>=', 5)->orWhere('bathrooms', '>=', 5),
                    default => $q
                };
            });
    
            $properties = $query->paginate(min($this->maxPerPage, request('per_page', 10)))
                              ->withQueryString();
    
        } catch (\Exception $e) {
            logger()->error('Property query failed: ' . $e->getMessage());
            $properties = Property::where('is_for_sale', false)->paginate(10);
        }
    
        return view('livewire.home.rent-page', [
            'properties' => $properties,
            'categories' => Category::withCount(['properties' => function($query) {
                $query->where('is_for_sale', false);
            }])->get(),
            'features' => Featured::withCount(['properties' => function($query) {
                $query->where('is_for_sale', false);
            }])->get()
        ]);
    }
}