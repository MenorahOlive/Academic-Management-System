<?php

namespace App\Http\Controllers;

use App\Models\departments;
use App\Http\Requests\StoredepartmentsRequest;
use App\Http\Requests\UpdatedepartmentsRequest;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
        return $id?departments::find($id):departments::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $department = new departments();
        $department->name = $req->name;
        $result = $department->save();
        if ($result) {
            return ["Result" => "Created successfully"];
        } else {
            return ["Result" => "Creation failed"];
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredepartmentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredepartmentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function show(departments $departments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function edit(departments $departments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedepartmentsRequest  $request
     * @param  \App\Models\departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $department = departments::find($request->id);
        $department->name = $request->name;
        $result = $department->save();
        if($result){
            return response("Department Updated");
        }
        else{
            return response("An error has occured",$status=400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function destroy(departments $departments)
    {
        //
    }
}
