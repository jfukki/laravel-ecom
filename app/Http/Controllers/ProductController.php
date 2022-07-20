<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    function index (){

        $products = Product::all();
        // return view('products', $products);
        return view ('products' , ['products' => $products]);
    } //end of index function


    function detail($id)
    {
        $data = Product::find($id);

        return view ('productDetail', ['data' => $data]);
    }

    function addToCart(Request $req)
    {

        if($req->session()->has('user'))
        {
               $cart = new Cart();

               $cart -> product_id = $req->product_id;
               $cart -> user_id = $req->session()->get('user')['id'];
               $cart->save();
              
               return redirect ('/');

        }else{
                return redirect('/login');
        }
        
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
       if($userId>0)
       {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
       }else
       {
        return Cart::array();
       }
    }


}
