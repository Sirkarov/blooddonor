<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Question;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function list()
    {
        $questions = Question::all();
        return view('admin.questions.list',compact('questions'));
    }

    public function create()
    {
        $cities = City::all();
        $bloodTypes = BloodType::all();
        return view('admin.posts.create',compact('bloodTypes','cities'));
    }
    public function store(Request $request)
    {

        $question = new Question;

        $question->title = $request->get('title');
        $question->save();

        return redirect('admin/questions')->with(['success'=>'succesfully added']);
    }
    public function delete(Request $request)
    {
        $post =Post::find($request->get("id"));

        $post->delete();

        return response()->json(['status' => 'success']);
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $cities = City::all();
        $blood_types = BloodType::all();

        return view('admin.posts.edit', compact('post','cities','blood_types'));
    }
    public function update(Request $request,$id)
    {
        $post = Post::findorFail($id);

        $post->city_id = $request->get('city');
        $post->blood_type_id = $request->get('bloodType');
        $post->description = $request->get('description');

        $post->save();

        return redirect('admin/posts')->with(['success'=>'succesfully added']);
    }
}
