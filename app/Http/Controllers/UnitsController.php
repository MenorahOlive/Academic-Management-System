<?php

namespace App\Http\Controllers;
use App\Models\Unit;

use Illuminate\Http\Request;

class UnitsController extends Controller
{
    //
    public function show_units(){
        $units = Unit::all();
        return view('units',['units' => $units]);
    }
    public function add_units(Request $request){
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'year' => 'required'
        ]);
        Unit::create($request->all());
        return view('units');
    }
    public function update(Request $request, $id)
    {
        $Unit = Unit::find($id);
        $Unit->update($request->all());
        return view('units');
    }

   
    public function destroy($id)
    {
        Unit::destroy($id);
        return view('units');
    }
    public function get_units($year,$sem){
        $conditions = ['year' => $year,'semester'=>$sem];
        $mails = Unit::select('name')->where($conditions)->list();
        return $mails;
    }

}

