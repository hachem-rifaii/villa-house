<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class agent extends Controller
{
    public function index()
    {
        $agents = Team::all();
        return view('pages.agent',[
            'agents' => $agents
        ]);
    }
}
