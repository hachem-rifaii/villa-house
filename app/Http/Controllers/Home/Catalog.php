<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Catalog as CatalogModel;
use Illuminate\Http\Request;

class Catalog extends Controller
{
    public function index()
    {
        $catalogs = CatalogModel::all();
        return view('pages.catalog' , [
            'catalogs' => $catalogs
        ]);
    }
}
