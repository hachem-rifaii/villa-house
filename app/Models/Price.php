<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Price extends Model
{


    protected $fillable = [
        'price',
        'currency_id',
        'property_id',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }


}
