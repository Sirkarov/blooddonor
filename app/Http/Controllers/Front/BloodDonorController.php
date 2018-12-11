<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BloodDonorController extends Controller
{
    public function index()
    {
        $blood_donors = User::where('isAdmin','=','0')->get();
        return view('front.blood_donors', compact('blood_donors'));
    }

    public function profile($id)
    {
        $user = User::findorFail($id);
        return view('front.blood_donor_profile',compact('user'));
    }

}
