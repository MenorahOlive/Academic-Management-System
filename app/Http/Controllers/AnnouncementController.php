<?php

namespace App\Http\Controllers;

use App\Models\announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return announcement::all();
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
            'title'=> 'required',
            'description' => 'required',
            'recepient' => 'required',
            'lecturer' => 'required'
        ]);

        return announcement::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return announcement::find($id);
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
        $ai = announcement::find($id);
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
        return announcement::destroy($id);
    }
    /**
     * Search for the specified resource from storage by lecturer.
     *
     * @param  int  $lecid
     * @return \Illuminate\Http\Response
     */
    public function searchLecturer($lecid)
    {
        return announcement::where('lecturer',$lecid)->get();
    }
    /**
     * Search for the specified resource from storage by student.
     *
     * @param  int  $studid
     * @return \Illuminate\Http\Response
     */
    public function searchStudent($studid)
    {
        return announcement::where('student',$studid)->get();
    }
}
