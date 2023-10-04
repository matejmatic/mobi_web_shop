<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;


class ProductsController extends Controller
{
    public function index ()
    {
        $cart = Cart::content();
        //return view('welcome')->with([
        return view('product')->with([
            'products'   => Product::orderBy('id', 'desc')->get(),
            'categories' => Category::all(),
            'cart'       => $cart,
        ]);
    }

    public function list ()
    {
        return view('list');
    }

    public function getProductsByCategoryId ($id)
    {
        return view('show-products-by-category')->with([
            'categories' => Category::all(),
            'products' => Product::where('category_id', $id)->get(),
            'cart' => Cart::content(),
        ]);
    }

    public function search () 
    {
        $cart = Cart::content();
        $search = $_GET['query'];
        $products = Product::where('name', 'LIKE', '%'. $search. '%')->get();

        //return view('search')->with('products', $products);
        $cart = Cart::content();
        return view('search')->with([
            'products'   => Product::orderBy('id', 'desc')->get(),
            'categories' => Category::all(),
            'cart'       => $cart,
        ]);
    }
}
