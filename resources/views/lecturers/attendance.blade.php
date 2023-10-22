@extends('lecturers/layout')

@section('main_content')
<div class="lecturers-container">
    <section id="mark-attendance">
        <form action="{{url('lecturers/class/attendance/')}}" method="post">

            @csrf
            <div class="form-container">
                <label for="Date">Date</label>
                <input type="date" name="created_at" id="">
            </div>
            <div class="form-container">
                <label for="">Student</label>
                <select name="student" id="">
                    @foreach($students as $student)
                    <option value="{{$student['student_id']}}">{{$student['student_id']}} {{$student['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-container">
                <label for="">Present</label>
                <input type="checkbox" name="present" id="">
            </div>
            <input type="hidden" name="class_id" value="{{$class['id']}}">
            <button type="submit" class="primary-btn full-btn">Update</button>

        </form>
    </section>
</div>
@endsection