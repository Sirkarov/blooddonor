<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function login()
    {
        return view('front.login');
    }
    public function learn()
    {
        return view('front.learn');
    }
}
