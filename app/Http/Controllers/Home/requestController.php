<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class requestController extends Controller
{
 

    public function showForm(){
        return view('request-form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'property_id' => 'nullable|exists:properties,id',
        ]);

        // Store the request in the database
        \App\Models\Requets::create($request->all());

        return redirect()->back()->with('success', 'Request submitted successfully!');
    }



 
}
