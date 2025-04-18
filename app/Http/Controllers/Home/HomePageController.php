<?php

namespace App\Http\Controllers\Home;

// use App\Filament\Resources\PropertyResource\Widgets\Property;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Team;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $teams = Team::take(4)->get();
        $properties = Property::where('is_Exclusive' , true)->take(4)->get();
        $new_properties = Property::where('created_at', '>=', now()->subDays(7))
        ->latest()
        ->take(4)
        ->get();
        return view('layout',[
            'teams' => $teams,
            'properties' => $properties,
            'new_properties' => $new_properties
        ]);
    }
}
