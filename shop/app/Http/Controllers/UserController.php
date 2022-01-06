<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Shop;

class UserController extends Controller
{
    function login(Request $request)
    {

        return view('Login.Login');
    }

    function loginapi(Request $request)
    {
        $show = Shop::all();
        $user = $request['user'];
        $pass = $request['password'];

        if (Auth::attempt(['name' => $user, 'password' => $pass])) {
            return view('ShopPage.Shop-index', ['shop' => $show]);
        }
        return view('Login.LoginFalse');
    }

    function sign()
    {

        return view('Login.Sign');
    }

    function signapi(Request $request)
    {
        User::create([
            'name' => $request['name'],
            //bcrypt->使密碼到資料庫的時候顯示亂碼
            'password' => bcrypt($request['password']),
            'email' => $request['email']
        ]);
        return view('Login.Signsuc');
    }
}
