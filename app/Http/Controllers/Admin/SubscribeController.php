<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    public function list()
    {
        $subscribers  = Subscribe::all();
        return view('admin.subscribers.list',compact('subscribers'));
    }

    public function store(Request $request)
    {
        $subscriber = new Subscribe;

        $subscriber->email = $request->get('email');

        $subscriber->save();

        return redirect('admin/subscribers')->with(['success'=>'succesfully added']);
    }

    public function frontStore(Request $request)
    {
        $subscriber = new Subscribe;

        $subscriber->email = $request->get('email');

        $subscriber->save();

        return redirect('/')->with(['success'=>'succesfully added']);
    }

    public function delete(Request $request)
    {
        $subscriber=Subscribe::find($request->get("id"));
        $subscriber->delete();

        return response()->json(['status' => 'success']);
    }

    public function edit($id)
    {
        $subscriber = Subscribe::findorFail($id);

        return view('admin.subscribers.edit',compact('subscriber'));
    }

    public function update(Request $request,$id)
    {
        $subscriber = Subscribe::findorFail($id);

        $subscriber->email = $request->get('email');

        $subscriber->save();


        return redirect('admin/subscribers')->with(['success'=>'succesfully added']);
    }
}
