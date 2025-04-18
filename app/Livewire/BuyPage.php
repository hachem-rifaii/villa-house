<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class BuyPage extends Component
{
    public $min = 0;
    public $max = 1000000000;
    public $price_min =null;
    public $price_max = null;
    public function render()
    {
        $property = Property::when($this->price_min || $this->price_max, function ($query) {
            $min =  (float) $this->price_min;
            $max =  (float) $this->price_max;

            $query->whereHas('prices', function ($q) use ($min, $max) {
                $q->whereBetween('price', [$min, $max]);
            });
        })->get();

        return view('livewire.buy-page', [
            'properties' => $property,
        ]);
    }
}
