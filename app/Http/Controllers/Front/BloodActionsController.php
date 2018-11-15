<?php

namespace App\Http\Controllers\Front;

use App\Models\BloodAction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BloodActionsController extends Controller
{
    public function actions()
    {
        $blood_actions = BloodAction::all();
        return view('front.blood_actions',compact('blood_actions'));
    }

}
