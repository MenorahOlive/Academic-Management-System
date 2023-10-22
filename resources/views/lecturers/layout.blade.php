@extends('lecturers/base')


@section('content')
<aside>
    <div class="navigation-links">
        <div class="navigation-link">
            <div class="row">
                <p class="navigation-title">Materials</p>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
        <a href="/lecturers/quiz">
            <div class="navigation-link">
                <div class="row">
                    <p class="navigation-title">Quizzes</p>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </a>
        <div class="navigation-link">
            <div class="row">
                <p class="navigation-title">Results</p>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
        <div class="navigation-link">
            <div class="row">
                <p class="navigation-title">Attendance</p>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>

    </div>
</aside>
<main>
    @yield('main_content')
</main>
@endsection