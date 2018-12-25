<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Question;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request,$user_id)
    {
        $question = new Question;
        $question->title = $request->get('title');
        $question->description = "";
        $question->save();

        return redirect('admin/questions')->with(['success'=>'succesfully added']);
    }
    public function frontstore(Request $request)
    {
        $question = new Question;
        $question->user_id =Auth::user()->id;
        $question->title = $request->get('title');
        $question->description = "";
        $question->save();

        return redirect('/questions')->with(['message'=>'Вашето прашање ќе биде процесирано!']);
    }
    public function delete(Request $request)
    {
        $post =Question::find($request->get("id"));
        $post->delete();

        return response()->json(['status' => 'success']);
    }
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $users = User::where('isAdmin',0)->get();

        return view('admin.questions.edit', compact('question','users'));
    }
    public function update(Request $request,$id)
    {
        $question = Question::findorFail($id);

        $question->user_id = $request->get('user');
        $question->title = $request->get('title');
        $question->description =  $request->get('description');

        $question->save();

        return redirect('admin/questions')->with(['success'=>'succesfully added']);
    }

    public function more($id)
    {
        $question = Question::findOrFail($id);

        return view('admin.questions.more',compact('question'));
    }

}
