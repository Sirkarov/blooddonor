<?php

namespace App\Http\Controllers\Admin;

use App\Models\Term;
use App\Models\User;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class TermController extends Controller
{
    public function list()
    {
        $terms  = Term::all();
        return view('admin.terms.list',compact('terms'));
    }

    public function store(Request $request)
    {
        $term = new Term;
        $term ->user_id = Auth::user()->id;
        $term ->city_id = $request->get('city');
        $term -> date = $request->get('date');
        $term -> time = $request->get('time');

        $term->save();

        return redirect('admin/terms')->with(['success'=>'succesfully added']);
    }

    public function delete(Request $request)
    {
        $term=Term::find($request->get("id"));
        $term->delete();

        return response()->json(['status' => 'success']);
    }

    public function edit($id)
    {
        $term = Term::findorFail($id);
        $users = User::where('isAdmin','0')->get();
        $cities = City::where('id','>','1')->get();

        return view('admin.terms.edit',compact('term','users','cities'));
    }

    public function update(Request $request,$id)
    {

        $term = Term::findorFail($id);

        $term ->user_id = $request->get('user');
        $term ->city_id = $request->get('city');
        $term -> date = $request->get('date');
        $term -> time = $request->get('time');

        $term->save();

        return redirect('admin/terms')->with(['success'=>'succesfully added']);
    }

    public function create()
    {
        $users = User::all();
        $cities = City::all();

        return view('admin.terms.create',compact('users','cities'));
    }
}
