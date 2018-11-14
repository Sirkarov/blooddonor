<?php

namespace App\Http\Controllers\Admin;

use App\Models\BloodAction;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BloodActionController extends Controller
{
    public function index()
    {
        $blood_actions = BloodAction::all();
        return view('admin/bloodactions/list',compact('blood_actions'));
    }
    public function create()
    {
        $cities = City::All();
        return view('admin/bloodactions/create',compact('cities'));
    }
    public function store(Request $request)
    {
        #Create new Characteristic
        $blood_action = new BloodAction;
        $blood_action->name = $request->get('name');
        $blood_action->location = $request->get('location');
        $blood_action->date = $request->get('date');
        $blood_action->city_id = $request->get('city');
        $blood_action->time = $request->get('time');
        #Save it to the database
        $blood_action->save();
        #And redirect somewhere in the application
        return redirect('admin/bloodactions')->with(['success'=>'succesfully added']);
    }
    public function destroy($id)
    {
        $characteristic=BloodAction::findOrFail($id);
        $characteristic->delete();

        return redirect(route('admin.bloodactions.index'));
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
