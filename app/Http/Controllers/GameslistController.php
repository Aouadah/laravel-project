<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GameslistController extends Controller
{
    public function create()
    {
        return view('gameslist.create');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'title' => 'required|max:50|unique:products,title',
            'creators' => 'required|max:55',
            'year_of_release' => 'required|max:4||min:4',
            'genre' => 'required|max:55',
            'description' => 'required|max:55',
        ]);

        //create the product
        Product::create($attributes);

        //return to the homepage
        return redirect('/');
    }
}
