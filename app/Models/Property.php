<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Log;


class Property extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'bedrooms',
        'bathrooms',
        'area',
        'location',
        'address',
        'is_for_sale',
        'is_featured',
        'off_plan',
        'status',
        'is_Exclusive',
        'images',
        'rera_no',
        'reference_no',
        'property_type',
        'furnishing',
        'parking_lots',
        'team_id',
    ];

    protected $casts = [
        'is_for_sale' => 'boolean',
        'off_plan' => 'boolean',
        'location' => 'array',
        'is_Exclusive' => 'boolean',
        'images' => 'array',
    ];

    // Custom location attribute to combine latitude and longitude


    protected static function booted()
    {
        static::deleting(function ($property) {
            if ($property->images) {
                foreach ($property->images as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function featureds()
    {
        return $this->belongsToMany(Featured::class, 'properties_featureds')->withTimestamps();
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }
    public function requests()
    {
        return $this->hasMany(Requets::class);
    }

    protected static function boot()
    {
        parent::boot();
    
        static::created(function ($property) {
            if (request()->filled('prices')) {
                foreach (request('prices') as $priceData) {
                    Log::info('Price Data:', $priceData);
    
                    $property->prices()->create([
                        'price' => $priceData['price'],
                        'currency_id' => $priceData['currency_id'] ?? null, 
                    ]);
                }
            }
        });
    }
}
