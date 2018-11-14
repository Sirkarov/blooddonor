<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BloodDonorController extends Controller
{
    public function index()
    {
        $blood_donors = User::all();
        return view('front.blood_donors',compact('blood_donors'));
    }
    public function profile()
    {
        return view('front.profile');
    }
}
