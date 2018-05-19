<?php

namespace App\Http\Controllers;

use App\login;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{

    public function signin(Request $request){
        $username = Input::get('username');
        $password = Input::get('pass');

        if (Auth::attempt(array('email' => $username, 'password' => $password , 'admin'=>0))){
            return redirect()->to('/suggestion');
        }
        else if (Auth::attempt(array('email' => $username, 'password' => $password , 'admin'=>1))){
            return redirect()->to('/report');
        }
        else {
            return redirect()->back();
        }
    }
}
