@extends('lecturers/layout')

@section('main_content')
<title>{{$class['name']}}</title>
<div class="lecturers-container" id="materials-container">
    <div class="container">
        <p class="class-name-title">{{$class['unit_']['name']}}</p>
        <p class="class-name-group">{{$class['group_']['name']}}</p>

    </div>
    <div class="row">

        <section id="materials-list">
            <!-- <p class="lecturer-section-title">Class Materials</p> -->
            @foreach($materials as $material)
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
                Add a material
            </p>
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{url('lecturers/class/materials/')}}" method="post">>
                @csrf
                <div class="form-container">
                    <label for="">Title</label>
                    <input type="text" name="name" id="" placeholder='Material Title'>
                </div>
                <div class="form-container">
                    <label for="">File</label>
                    <input type="file" placeholder="File" name="file_url">
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