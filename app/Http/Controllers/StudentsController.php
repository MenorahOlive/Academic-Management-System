<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\AssessmentMark;
use App\Models\UnitAllocation;
use App\Models\FeeBalance;
use App\Models\StudentAttendance;


class StudentsController extends Controller
{
  
      /**
     * Display the specified resource.
     *
     * 
     * 
     */
    public function show_timetable()
    {
        return view('timetable');
    }
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_units($id)
    {
        $units = UnitAllocation::find($id);
        return view('units', ['units'=>$units]);
    }
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_fees($id)
    {
        $fees = FeeBalance::find($id);
        return view('fees', ['fees'=>$fees]);
    }
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_attendance($id)
    {
        $attendance = StudentAttendance::find($id);
        return view('attendance', ['attenadance'=>$attendance]);
    }
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_coursework_marks($id)
    {
        $marks = AssessmentMark::find($id);
        return view('coursework_marks', ['marks'=>$marks]);
    }
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_student_details($id)
    {
        $details= students::find($id);
        return view('student_details', ['details'=>$details]);
    }

    public function destroy(students $students)
    {
        $students->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully');
    }
    public function assign_unit(Request $request){
         UnitAllocation::create($request->all());
         //view
    }
    public function get_mails($group){
        $mails = students::select('email')->where('groupID',$group)->list();
        return $mails;
    }
}

