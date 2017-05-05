<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login/login',['login' => ['message' => 'fuckyou!','default' => 'joe blow']]);
    }

    public function login(){
        return view('login/login',['login' => ['message' => 'fuckyou!','default' => 'joe blow']]);
    }
}
