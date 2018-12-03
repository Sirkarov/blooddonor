<?php

namespace App\Http\Controllers\Front;

use App\Models\BloodType;
use App\Models\GenderType;
use App\Models\City;
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
    public function get_user_profile($id)
    {
        $user = User::findorFail($id);
        return view('front.user.profile',compact('user'));
    }
    public function edit_user_profile($id)
    {
        $user = User::findorFail($id);
        $genderTypes = GenderType::all()->where('id','>','1');
        $cities = City::all()->where('id','>','1');
        $bloodTypes = BloodType::all()->where('id','>','1');
        return view('front.user.edit',compact('user','genderTypes','cities','bloodTypes'));
    }
    public function user_update(Request $request,$id)
    {
        $user = User::findorFail($id);

        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->email = $request->get('email');
        $user->gender_type_id = $request->get('gender');
        $user->years = $request->get('years');
        $user->blood_type_id = $request->get('bloodType');
        $user->birth = $request->get('birth');
        $user->city_id = $request->get('city');
        $user->phone = $request->get('phone');
        $user->donations = $request->get('donations');

       request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('uploads'), $imageName);


        $user->image = $imageName;

        $user->save();

        return redirect("profile/$id")->with(['success'=>'succesfully added']);
    }
    public function term()
    {
        //$user = User::findorFail($id);

        return view('front.term',compact('user'));
    }

}
