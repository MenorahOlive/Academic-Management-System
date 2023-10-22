<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

class apiUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Unit::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required'
        ]);
        // $school_id= School::where('name','like', '%'.$request->input('name').'%')->get();
        return Unit::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Unit::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Unit = Unit::find($id);
        $Unit ->update($request->all());
        return $Unit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Unit::destroy($id);
    }
    /**
     * Search for a resource name from storage.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Unit::where('name','like', '%'.$name.'%')->get();
    }
}
