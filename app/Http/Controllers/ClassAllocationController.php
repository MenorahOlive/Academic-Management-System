<?php

namespace App\Http\Controllers;

use App\Models\ClassAllocation;
use Illuminate\Http\Request;

class ClassAllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ClassAllocation::all();
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
            'lecturer'=> 'required',
            'unit' => 'required',
            'group' => 'required'
        ]);

        return ClassAllocation::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ClassAllocation::find($id);
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
        $ai = ClassAllocation::find($id);
        $ai->update($request->all());
        return $ai;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return ClassAllocation::destroy($id);
    }
    /**
     * Search for the specified resource from storage.
     *
     * @param  int  $lecid
     * @return \Illuminate\Http\Response
     */
    public function searchLecturer($lecid)
    {
        return ClassAllocation::where('lecturer',$lecid)->get();
    }
}
