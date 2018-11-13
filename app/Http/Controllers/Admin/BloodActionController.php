<?php

namespace App\Http\Controllers\Admin;

use App\Models\BloodAction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BloodActionController extends Controller
{
    public function index()
    {
        $characteristics = BloodAction::all();
        return view('admin/bloodactions/list',compact('characteristics'));
    }
    public function create()
    {
        return view('admin/bloodactions/create');
    }
    public function store(Request $request)
    {
        #Create new Characteristic
        $characteristic = new BloodAction;
        $characteristic->characteristic = $request->get('characteristic');
        #Save it to the database
        $characteristic->save();
        #And redirect somewhere in the application
        return redirect('admin/bloodactions')->with(['success'=>'succesfully added']);
    }
    public function destroy($id)
    {
        $characteristic=BloodAction::findOrFail($id);
        $characteristic->delete();

        return redirect(route('admin.bloodactions.list'));
    }
    public function edit($id)
    {
        $characteristic = BloodAction::findOrFail($id);

        return view('admin.bloodactions.edit', compact('characteristic'));
    }
    public function update(Request $request,$id)
    {
        $characteristic = BloodAction::findorFail($id);
        $characteristic->characteristic = $request->get('characteristic');
        $characteristic->save();

        return redirect('admin/bloodactions')->with(['success'=>'succesfully added']);
    }
}
