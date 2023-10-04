<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoriesController extends Controller
{
    public function index ()
    {
        return view('welcome')->with('categories', Category::all());
    }

    public function getCategories ()
    {
        return Category::all();
    }

}
