<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class TestMapController extends Controller
{
    public function index()
    {
        $property = Property::find(8);


        $location = ['lat' => 40.4168, 'lng' => -3.7038];

        if ($property && $property->location) {
            $location = $property->location;
            if (!isset($location['lat']) || !isset($location['lng'])) {
                $location = ['lat' => 40.4168, 'lng' => -3.7038];
            }
        }

        return view('test-map', compact('location'));
    }
}
