@extends('lecturers/layout')

@section('main_content')
<div class="lecturers-container" id="materials-container">
    <div class="container">
        <p class="class-name-title">{{$class['unit_']['name']}}</p>
        <p class="class-name-group">{{$class['group_']['name']}}</p>

    </div>
    <div class="row">

        <section id="materials-list">
            <!-- <p class="lecturer-section-title">Class Materials</p> -->
            @foreach($quizzes as $material)
            <div class="material-card">
                <p class="material-card-title">
                    {{$material['name']}}
                </p>
                <p class="material-card-date">
                    13th January 2022
                </p>
            </div>
            @endforeach
        </section>

        <section id="material-add">
            <p class="lecturer-section-title">
                Add a quiz/exam
            </p>
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{url('lecturers/class/quiz/')}}" method="post">>
                @csrf
                <div class="form-container">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" placeholder='Quiz Title'>
                </div>
                <div class="form-container">
                    <label for="">Weight</label>
                    <input type="number" placeholder="Weight e.g 30" name="total">
                </div>

                <input type='hidden' value="{{$class['id']}}" name="class">
                <button class="primary-btn" id='upload-btn' type='submit'>
                    Upload Material
                </button>
            </form>
        </section>
    </div>
</div>
@endsection