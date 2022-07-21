<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class UserController extends Controller
{

    public function register()
    {
        return view('register');
    }
    
    public function registerUser(Request $req)
    {
            $user = new User();

            $user -> name = $req->name;
            $user -> email = $req->email;
            $user -> password = Hash::make($req->password);

            $user->save();

            return redirect('login');


    }


    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
         
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "Email or Password is not correct";
        }
        else
        {
            $req->session()->put('user', $user);
            return redirect('/product');
        }
    }

    function logout()
    {
        Session::forget('user');
        return redirect ('/login');
    }
}
