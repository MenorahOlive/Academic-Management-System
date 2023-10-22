<?php

namespace App\Http\Controllers;

use App\Models\AssesmentItem;
use Illuminate\Http\Request;

class AssesmentItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AssesmentItem::all();
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
            'name'=> 'required',
            'course' => 'required',
            'group' => 'required'
        ]);

        return AssesmentItem::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return AssesmentItem::find($id);
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
        $ai = AssesmentItem::find($id);
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
        return AssesmentItem::destroy($id);
    }
    /**
     * Search for a resource name from storage.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return AssesmentItem::where('name','like', '%'.$name.'%')->get();
    }
}
