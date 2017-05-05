<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $array = ['data' => []];
        return view('home/home',$array);
    }

    public function login(){
        return view('login/login');
    }
}
