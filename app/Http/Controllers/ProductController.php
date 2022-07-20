<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index (){

        $products = Product::all();
        // return view('products', $products);
        return view ('products' , ['products' => $products]);
    }
}
