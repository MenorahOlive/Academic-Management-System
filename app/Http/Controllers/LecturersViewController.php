<?php

namespace App\Http\Controllers;

use App\Models\ClassAllocation;
use App\Models\ClassMaterial;
use App\Models\LectureSession;
use App\Models\Quiz;
use App\Models\Results;
use App\Models\StudentAttendance;
use App\Models\students;
use App\Models\UnitAllocation;
use Illuminate\Http\Request;

class LecturersViewController extends Controller
{
    public function index()
    {
        $lec_classes = ClassAllocation::where('lecturer', '=', 1)->get();
        $context = ['classes' => $lec_classes];

        return view('lecturers/index', $context);
    }

    public function class_index($id)
    {
        return redirect()->route('class_materials', ['id' => $id]);
    }

    public function class_materials($id)
    {
        $class = ClassAllocation::query()->with(['unit_', 'group_'])->find($id);
        $class_materials = ClassMaterial::where('class', $id)->get();

        $materials = ['materials' => $class_materials, 'class' => $class];
        return view('lecturers/materials', $materials);
    }

    public function add_material(Request $request)
    {

        $name = $request->get('name');
        $description = "";
        $file_url = $request->get('file_url', '');
        $class = $request['class'];
        // error_log($class);
        $material = ClassMaterial::create($request->all());
        $id = $request->get('class');
        return redirect()->route('class_materials', ['id' => $class]);
    }
    public function quizzes($id)
    {
        $class = ClassAllocation::query()->with(['unit_', 'group_'])->find($id);
        $quizes = Quiz::where('class', $id)->get();
        $context = ['class' => $class, 'quizzes' => $quizes];
        return view('lecturers/quiz', $context);
    }
    public function createQuiz(Request $request)
    {
        Quiz::create($request->all(['class','name','total']));
        return redirect()->route('class_quiz', ['id' => $request->class]);
    }
    public function results($id){
        $class = ClassAllocation::query()->with(['unit_', 'group_'])->find($id);
        $quizzes = Quiz::where('class',$id)->get();
        $students = students::all();
        $context = ['class'=>$class,'quizzes'=>$quizzes,'students'=>$students];
        return view('lecturers/results',$context);
    }
    public function postResults(Request $req){
        Results::create($req->all(['quiz','student','marks']));
        return redirect()->route('results_lec',['id'=>$req->class]);
    }
    public function attendance($id){
        $class = ClassAllocation::query()->with(['unit_', 'group_'])->find($id);
        $students = students::all();
        
        $context = ['class'=>$class,'students'=>$students];
        return view('lecturers/attendance',$context);
    }
    public function postAttendance(Request $req){
        StudentAttendance::create($req->all(['class_id','created_at','student']));
        return redirect()->route('attendance_lec',['id'=>$req->class_id]);
    }
}
