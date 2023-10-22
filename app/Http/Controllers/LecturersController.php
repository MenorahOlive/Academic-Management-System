<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturers;

class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lecturers::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Lecturers::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Lecturers::find($id);
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
        $lec = Lecturers::find($id);
        $lec ->update($request->all());
        return $lec;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Lecturers::destroy($id);
    }

    public function sendUnitRequest($group,$year,$sem){
        $stCon = new StudentsController;
        $uCon = new UnitsController;

        $email_array = $stCon->get_mails($group);
        $units_array = $uCon->get_units($year,$sem);

        $mailCon = new sendMailController();
        $mailCon->sendUnitsMail($email_array,$units_array);
        //view

    }
}
