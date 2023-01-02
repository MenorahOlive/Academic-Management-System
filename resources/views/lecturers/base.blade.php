<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/lecturers.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/admin.css')}}">
    <title>Document</title>
</head>

<header class='row space-btn'>
    <h2 class="logo">Some School</h2>

    <div class="user-profile">
        <p>Deperias Kerre</p>
    </div>
</header>
<body id='lecturers-page'>
   
    <main>

        @yield('content')
    </main>
</body>

</html>