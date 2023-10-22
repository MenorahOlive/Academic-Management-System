<?php

namespace App\Http\Controllers;
use App\Models\Unit;

use Illuminate\Http\Request;

class UnitsApiController extends Controller
{
    //
    public function index(){
        return Unit::all();
    }
    public function add_units(Request $request){
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'year' => 'required'
        ]);
        return Unit::create($request->all());
        
    }
    public function update(Request $request, $id)
    {
        $Unit = Unit::find($id);
        $Unit->update($request->all());
        return $Unit;
    }

   
    public function destroy($id)
    {
        return Unit::destroy($id);
    }

}

