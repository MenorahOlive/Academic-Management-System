<?php

namespace App\Http\Controllers;

use App\Models\ClassMaterial;
use App\Http\Requests\StoreClassMaterialRequest;
use App\Http\Requests\UpdateClassMaterialRequest;

class ClassMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClassMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassMaterialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassMaterial  $classMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(ClassMaterial $classMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassMaterial  $classMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassMaterial $classMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassMaterialRequest  $request
     * @param  \App\Models\ClassMaterial  $classMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassMaterialRequest $request, ClassMaterial $classMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassMaterial  $classMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassMaterial $classMaterial)
    {
        //
    }
}
