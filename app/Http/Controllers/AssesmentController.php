<?php

namespace App\Http\Controllers;
use App\Models\AssessmentMark;

use Illuminate\Http\Request;

class AssesmentController extends Controller
{
    public function addMarks(Request $request){
        AssessmentMark::create($request->all());
    }
    public function getMarks($student)
    {
        AssessmentMark::where('student',$student)->get();
    }

}
