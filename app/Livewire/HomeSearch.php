<?php
namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class HomeSearch extends Component
{
    public $search = '';
    public $category = null;
    public $min = null;
    public $max = null;
    public $code = null;

    public function render()
    {
   
        $properties = Property::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->category, function ($query) {
                $query->whereHas('category', function ($q) {
                    $q->where('id', (int) $this->category);
                });
            })
 
            ->when($this->min || $this->max, function ($query) {
                $min = $this->min ? (float) $this->min : 0;
                $max = $this->max ? (float) $this->max : 10000000;

                $query->whereHas('prices', function ($q) use ($min, $max) {
                    $q->whereBetween('price', [$min, $max]);
                });
            })
       
            ->when($this->code, function ($query) {
                $query->whereHas('prices.currency', function ($q) {
                    $q->where('code', $this->code);
                });
            })
           
            ->get();

        return view('livewire.home-search', compact('properties'));
    }
}
