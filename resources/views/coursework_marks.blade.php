<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet"href="{{ URL::asset('/css/style2.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/inventory.css')}}">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="/img/img1.svg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>

    </style>
</head>

<body>

    <div class="wrapper">
        <!--Top menu -->
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>

                    </a>

                </div>
            </div>

        </div>
        <div class="sidebar">
            <!--profile image & text-->
            <div class="profile">
                <img src="/img/img1.svg" alt="logo">
                <h2 style="color:white">Student Dashboard</h2>

            </div>
            <!--menu item-->
            <ul>
                <li>
                    <a href="{{url('/students/student_details')}}" >
                        <span class="icon"><i class="bi-person-circle"></i></span>
                        <span class="item">View Details</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/students/coursework_marks')}}" class="active">
                        <span class="icon"><i class="bi bi-graph-up"></i></span>
                        <span class="item">View Progress</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/students/attendance')}}" >
                        <span class="icon"><i class="bi bi-clipboard-check"></i></span>
                        <span class="item">View Attendance</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/students/fees')}}">
                        <span class="icon"><i class="bi bi-cash-coin"></i></span>
                        <span class="item">View Fees</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/students/timetable')}}">
                        <span class="icon"><i class="bi bi-table"></i></span>
                        <span class="item">View Timetable</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/students/units')}}">
                        <span class="icon"><i class="fas fa-book"></i></span>
                        <span class="item">View Units</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/students/welcome')}}">
                        <span class="icon"><i class="bi bi-person-x"></i></span>
                        <span class="item">Logout</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="section">
        <section>


        <body>
            <section class="shopping-cart">

            <h1 class="heading" style="margin-left: 180px;">View Progress Report</h1>
                

                <table style="margin-left: 200px;">

                    <thead>
                        <th>assessment_id</th>
                        <th>assessment</th>
                        <th>marks</th>
                    </thead>

                    <tbody>
                        @foreach($assessments as $assessment)
                        <td>{{$assessment->id}}</td>
                        <td>{{$assessment->assessment}}</td>
                        <td>{{$assessment->marks}}</td>

                        @endforeach
                        
                    </tbody>
                </table>
            </section>

        </section>

    </div>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function() {
            document.querySelector("body").classList.toggle("active");
        })
    </script>
</body>

</html>