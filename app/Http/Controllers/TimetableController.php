<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimetableController extends Controller
{
    //
    public function show_timetable(){
        return view('timetable');
    }
}
