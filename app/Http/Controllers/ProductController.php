<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Session;
use Illuminate\Support\Facades\DB;

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
              
               return redirect ('cartList');

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

    public function cartList()
    {
        //using joins to get data from the cartlist

        $user_id = Session::get('user')['id'];
        $products = DB::table('carts')
        ->join('products','carts.product_id', '=', 'products.id')
        ->where('carts.user_id', $user_id)
        ->select('products.*','carts.id as cart_id' )
        ->get();
        $count = $products->count();
        return view ('cartList' , ['products' => $products, 'count'=> $count]);
    }


    public function removeCartItem($id)
    {
        $cartItem = Cart::find($id);
        $cartItem->delete();
        return redirect('cartList');
    }

    public function orderNow()
    {

        $user_id = Session::get('user')['id'];
        $total = $products = DB::table('carts')
        ->join('products','carts.product_id', '=', 'products.id')
        ->where('carts.user_id', $user_id)
        ->sum('products.price');
        return view ('ordernow' , ['total' => $total]);
    }


    public function orderPlace(Request $req)
    { 
        $user_id = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $user_id)->get();

        foreach($allCart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "Pending";
            $order->payment_method = $req->paymentmethod;
            $order->payment_status = 'pending';
            $order->address = $req->address;

            $order->save();

            Cart::where('user_id', $user_id)->delete();

        }

        return view('thankyou'); 

    }

    public function myorder()
    {
        $user_id = Session::get("user")['id'];
        $orders   = DB::table('orders')
        ->join('products', 'orders.product_id', '=' ,'products.id')
        ->where('orders.user_id', $user_id) ->get();

        return view ('myorders', ['orders' => $orders]);
    }

}
