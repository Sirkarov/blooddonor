<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BdCenterController extends Controller
{
    public function centers()
    {
        return view('front.blood_centers');
    }
}
