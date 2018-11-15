<?php

namespace App\Http\Controllers\Admin;

use App\Models\BloodAction;
use App\Models\City;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BloodActionController extends Controller
{
    public function list()
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
        $blood_action=BloodAction::findOrFail($id);
        $blood_action->delete();

        return redirect(route('admin.bloodactions.list'));
    }
    public function edit($id)
    {
        $blood_action = BloodAction::findOrFail($id);

        return view('admin.bloodactions.edit', compact('blood_action'));
    }
    public function update(Request $request,$id)
    {
        $blood_action = BloodAction::findorFail($id);

        $blood_action->name = $request->get('name');
        $blood_action->location = $request->get('location');
        $blood_action->city_id = $request->get('city');
        $blood_action->date = $request->get('date');
        $blood_action->time = $request->get('time');

        $blood_action->save();

        return redirect('admin/bloodactions')->with(['success'=>'succesfully added']);
    }

    public function delete(Request $request)
    {
        $blood_action=BloodAction::findorFail($request->get("id"));

        $blood_action->delete();

        return response()->json(['status' => 'success']);
    }

    public function testStore()
    {
        $blood_action = new BloodAction();

        $blood_action->name = "Lorem Ipsum Dolor Sit Amet";
        $blood_action->location = "Some Random Location in Macedonia";
        $blood_action->city_id = rand(1,30);
        $blood_action->date = Carbon::now();
        $blood_action->time = "10:00";

        $blood_action->save();

        #And redirect somewhere in the application
        return redirect('admin/bloodactions')->with(['success'=>'succesfully added']);
    }
}
