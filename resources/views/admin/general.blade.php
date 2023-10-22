<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('/css/admin.css')}}">
    <title>Welcome Admin</title>
</head>

<body>
    <header>
        <a href='/admin'>
            <h2 id="text-logo">Stellar School</h2>
        </a>
        <div class="nav-links">
            <a href="/admin/admissions/" class="@if (Request::is('admin/admissions')){{'active'}}@endif nav-link">Admissions</a>
            <a href="/admin/notices/" class="@if (Request::is('admin/notices')){{'active'}}@endif nav-link">Announcements</a>
            <a href="/admin/staff/" class="@if (Request::is('admin/staff')){{'active'}}@endif nav-link">Staff</a>
            <a href="/admin/departments/" class="@if (Request::is('admin/departments')){{'active'}}@endif nav-link">Departments</a>
            <a href="/admin/lecturers/" class="@if (Request::is('admin/lecturers')){{'active'}}@endif nav-link">Lecturers</a>
        </div>
       
            @if(auth()->check())
            <div class="user-profile">

            </div>
            <p class="logout-link">Logout</p>
            @else
            <p class="logout-link">Login</p>
            @endif

        
    </header>

    <main>
        @yield('content')
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
<script>
    $(document).ready(function() {
        $('select').select2();
    });
</script>

</html>