<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function list()
    {
        return view('admin.posts.list');
    }

    public function create()
    {
        return view('admin.posts.create');
    }
    public function store(Request $request)
    {

        $post = new Post;
        $post->name = $request->get('city');

        $post->save();

        return redirect('admin/posts')->with(['success'=>'succesfully added']);
    }
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        $post->delete();

        return redirect('admin/posts');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.edit', compact('post'));
    }
    public function update(Request $request,$id)
    {
        $post = City::findorFail($id);
        $post->title = $request->get('title');
        $post->save();

        return redirect('admin/posts')->with(['success'=>'succesfully added']);
    }
}
