<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){
        // $schools = School::all();

        $user = auth()->user();
        // dd($user);
        /*

        $schulen = $user->schools;

        $schul_id = 101;

        $hak = $schulen->filter(function($schule) use ($schul_id) {
            return $schule->id == $schul_id;
        })->count();

        dd($hak);
*/
        $schools = $user->schools()->paginate(10);
        // dd($user);

       // $schools = School::paginate(10);

        return view('schools.index',['schools'=>$schools]);
    }

    public function store(Request $request)
    {

        $attributes = $request->validate([
            "name"=>"required|min:3|max:64|string",
            "address"=>"required|min:3|max:64|string",
            "school_number"=>"required|min:6|max:6|string",
        ]);


        $school = new School();
        $school->name="{$attributes['name']}";
        $school->adress="{$attributes['address']}";
        $school->school_number="{$attributes['school_number']}";
        $school->save();

        auth()->user()->schools()->attach($school);

        return back()->with('success',__('School saved.'));

    }

}
