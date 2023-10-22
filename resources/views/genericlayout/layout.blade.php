<!--This is a generic layout with a form-->


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet"href="{{ URL::asset('/css/style2.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/css/inventory.css')}}">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="restaurant.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General</title>
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
                <h2 style="color:white"> Dashboard</h2>

            </div>
            <!--menu item-->
            <ul>
                <li>
                    <a href="inventory.php" class="active">
                        <span class="icon"><i class="bi-plus-circle-fill"></i></span>
                        <span class="item">Add Course</span>
                    </a>
                </li>
                <li>
                    <a href="inventoryview.php">
                        <span class="icon"><i class="bi bi-eye-fill"></i></span>
                        <span class="item">View Courses</span>
                    </a>
                </li>
                <li>
                    <a href="inventoryedit.php">
                        <span class="icon"><i class="bi bi-tools"></i></span>
                        <span class="item">Update Courses</span>
                    </a>
                </li>
                <li>
                    <a href="inventorydelete.php">
                        <span class="icon"><i class="bi bi-trash-fill"></i></span>
                        <span class="item">Delete Courses</span>
                    </a>
                </li>
               

                <li>
                    <a href="inventoryreport.php">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="admin.php">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
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

            <h1 class="heading" style="margin-left: 180px;">View Students</h1>
                

                <table style="margin-left: 200px;">

                    <thead>
                        <th>student_id</th>
                        <th>name</th>
                        <th>course</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>DOB</th>
                        <th>Address</th>
                     
                    </thead>

                    <tbody>
                        
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