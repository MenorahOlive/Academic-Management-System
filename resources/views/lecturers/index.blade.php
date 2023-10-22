@extends('lecturers/base')
<title> Lecturers Page </title>
@section('content')

<div id="lecturers-index">

    <div class="hero-section">
        <h1>Welcome Deperias Kerre</h1>
    </div>
    <div class="row" id='class-cards'>
        @foreach($classes as $class)
        <a href="lecturer/class/{{$class['id']}}">
            <div class="class-card">
                <p class="class-card-id">
                    {{$class['id']}}
                </p>
                <p class="class-card-name"> SE</p>
                <p class="class-card-group">July 2022</p>
            </div>
        </a>
            @endforeach
    </div>
</div>

@endsection