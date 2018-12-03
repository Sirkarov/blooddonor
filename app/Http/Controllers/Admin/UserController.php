<?php

namespace App\Http\Controllers\Admin ;

use App\Models\BloodType;
use App\Models\GenderType;
use App\Models\City;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Symfony\Component\Debug\Tests\Fixtures\FinalClass;



class UserController extends Controller
{

    public function list()
    {
        $users = User::all();
        return view('admin.users.list', compact("users"));
    }
    public function create()
    {
        $genderTypes = GenderType::all();
        $cities = City::all();
        $bloodTypes = BloodType::all();

        return view('admin.users.create',compact('users','genderTypes','cities','roleTypes','bloodTypes'));
    }
    public  function store(Request $request)
    {
        //Create a new post using the request data , Save it to the database , And redirect somewhere in the application
        $user = new User;
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->gender_type_id = $request->get('gender');
        $user->city_id = $request->get('city');
        $user->blood_type_id = $request->get('bloodType');
        $user->email = $request->get('email');
        $user->years = $request->get('years');
        $user->phone = $request->get('phone');
        $user->donations = $request->get('donations');
        $user->birth = $request->get('birth');

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('uploads'), $imageName);


        $user->image = $request->get('image');
        $user->save();

        return redirect('admin/users')->with(['success'=>'succesfully added']);
    }

    public function testStore()
    {
        //Create a new test user with default values , Save it to the database , And redirect somewhere in the application
        $user = new User;
        $user->name = "Test User Name";
        $user->surname = "test User Surname";
        $user->gender_type_id = rand(1,2);
        $user->blood_type_id = rand(1,8);
        $user->email = "Test@Useremail.com";

        $years = rand(18,30);
        $user->years = $years;
        $city =  rand(1,30);
        $user->city_id = $city;
        $user->donations = rand(1,30);

        $phone = rand(111111,999999);
        $user->phone = "075".$phone;
        $user->image = "default";
        $user->password = "default";
        $user->birth = Carbon::now();

        #Save it to the database
        $user->save();

        #And redirect somewhere in the application
        return redirect('admin/users')->with(['success'=>'succesfully added']);
    }

    public function edit($id)
    {
        $user = User::findorFail($id);
        $genderTypes = GenderType::all();
        $cities = City::all();
        $blood_types = BloodType::all();
        return view('admin.users.edit', compact('user','genderTypes','cities','blood_types'));
    }

    public function update(Request $request,$id)
    {
        dd($request);
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
        $user->image = "default";
        $user->password = "default";

        $user->save();

        return redirect('profile/{{$id}}')->back()->with(['success'=>'succesfully added']);
    }

    public function delete(Request $request)
    {
        $user=User::find($request->get("id"));
        $user->delete();

        return response()->json(['status' => 'success']);
    }

    public function UserUpdate(Request $request,$id)
    {
            dd('jsee');
    }

}
