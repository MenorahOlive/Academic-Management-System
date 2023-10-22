@extends('lecturers/layout')
@section('main_content')

<div class="lecturers-container">
    <p class="lecturer-section-title">Quiz results</p>
    <section id="lecturer-results">
        <form action="{{url('lecturers/class/results/')}}" method="post">
            @csrf

            <div class="form-container">
                <label for="">Quiz</label>
                <select name="quiz" id="">
                    @foreach($quizzes as $quiz)
                    <option value='{{$quiz["id"]}}'>{{$quiz['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-container">
                <label for="">Student</label>
                <select name="student" id="">
                    @foreach($students as $student)
                    <option value="{{$student['student_id']}}">{{$student['student_id']}}- {{$student['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-container">
                <label for="">Marks</label>
                <input type="number" name='marks' placeholder='marks'>
            </div>
            <input type="hidden" name="class" value="{{$class['id']}}">
            <button type="submit" class="primary-btn full-btn">Post Results</button>
        </form>
    </section>
</div>
@endsection