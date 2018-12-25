<?php

namespace App\Http\Controllers\Front;

use App\Models\BloodType;
use App\Models\GenderType;
use App\Models\City;
use App\Models\Post;
use App\Models\Question;
use App\Models\Term;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $questions = Question::where('description','!=','')->get();
        return view('front.questions',compact('questions'));
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
        $id = Auth::user()->id;
        $user = User::findorFail($id);
        $cities = City::all();
        return view('front.term',compact('user','cities'));
    }

    public function storeTerm(Request $request)
    {
        $term = new Term;
        $term ->user_id = Auth::user()->id;
        $term ->city_id = $request->get('city');
        $term -> date = $request->get('date');
        $term -> time = $request->get('time');

        $term->save();

        return redirect('/term')->with('message', 'Успешно Закажавте Термин!');

    }
    public function getNewUsers()
    {
        $users = User::orderBy('id','Desc')->where('isAdmin','=','0')->with('city')->take(2)->get();
        //$users = User::where('isAdmin','=','0')->with('city')->get();
        return $users;
    }

    public function getPosts()
    {
        $posts = Post::with('city','bloodType')->get();
        return $posts;
    }

}

