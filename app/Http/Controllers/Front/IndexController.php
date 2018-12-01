<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

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
    public function benefits()
    {
        return view('front.benefits');
    }
    public function questions()
    {
        return view('front.questions');
    }
    public function get_user_profile()
    {
        return view('front.user.profile');
    }

    public function term()
    {
        //$user = User::findorFail($id);

        return view('front.term',compact('user'));
    }

}
