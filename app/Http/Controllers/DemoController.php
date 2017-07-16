<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DemoController extends Controller
{
    public function register()
    {
        //注册方法
        return view('register');
    }
    public function registerok()
    {
    }
}
