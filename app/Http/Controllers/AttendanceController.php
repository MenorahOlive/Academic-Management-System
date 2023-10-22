<?php

namespace App\Http\Controllers;
use App\Models\LectureSession;
use App\Models\StudentAttendance;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //
    public function show_attendance($id){

        return view('attendance');
    }
    public function create_class(Request $request){
        
    
        return LectureSession::create($request->all());
        //return view('');
    }
    public function delete_class($id){
        LectureSession::destroy($id);
        //return view('attendance');
    }
    public function edit_class(Request $request,$id){

        $class = LectureSession::find($id);
        $class ->update($request->all());
        //return view('attendance');
    }
    public function mark_attendance(Request $request){
        StudentAttendance::create($request->all());
    }
}
