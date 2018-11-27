<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\BloodType;

class PostController extends Controller
{
    public function list()
    {
        $posts = Post::all();
        return view('admin.posts.list',compact('posts'));
    }

    public function create()
    {
        $cities = City::all();
        $bloodTypes = BloodType::all();
        return view('admin.posts.create',compact('bloodTypes','cities'));
    }
    public function store(Request $request)
    {

        $post = new Post;
        $post->city_id = $request->get('city');
        $post->blood_type_id = $request->get('bloodType');
        $post->description = $request->get('description');

        $post->save();

        return redirect('admin/posts')->with(['success'=>'succesfully added']);
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

        return view('admin.posts.edit', compact('post'));
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
