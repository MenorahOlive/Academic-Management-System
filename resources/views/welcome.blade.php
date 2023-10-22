<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="{{ URL::asset('resources/css/style.css')}}" />
    <title>landing page</title>

</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"> <i class="bi bi-x-diamond "></i> Faraday Hills University</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#learn" class="nav-link">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a href="#instructors" class="nav-link">Lecturers</a>
                    </li>
                    <li class="nav-item">
                        <a href="#questions" class="nav-link">Questions</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#login">
                            Login
                        </button>
                        <?php
                        session_start();
                        error_reporting(0);
                        session_destroy();

                        echo $_SESSION['error'];



                        ?>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    <!-- Showcase -->
    <header class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Stellar<span class="text-warning"> Higher Education</span></h1>
                    <p class="lead my-4">
                        We teach our students with professional care and dedication
                    </p>
                    <button class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">
                        Enroll Now
                    </button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="/img/img1.svg" alt="" />
            </div>
        </div>
    </header>

    <!--Boxes-->
    <section class="p-5" style="background: linear-gradient(to right, #1f959b , #b19cd9);">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person"></i>
                            </div>
                            <h3 class="card-title mb-3">Students</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
                                molestiae nisi debitis rem ipsa sequi, dolore, voluptas atque dolorum, aut quaerat
                                mollitia molestias commodi. Molestiae voluptatem veritatis necessitatibus et possimus.
                            </p>
                            <a href="#" class="btn btn-secondary"> <i class="bi bi-chevron-right"></i>Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-pencil"></i>
                            </div>
                            <h3 class="card-title mb-3">Assesments</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
                                molestiae nisi debitis rem ipsa sequi, dolore, voluptas atque dolorum, aut quaerat
                                mollitia molestias commodi. Molestiae voluptatem veritatis necessitatibus et possimus.
                            </p>
                            <a href="#" class="btn btn-secondary"> <i class="bi bi-chevron-right"></i>Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-bicycle"></i>
                            </div>
                            <h3 class="card-title mb-3">Sports</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
                                molestiae nisi debitis rem ipsa sequi, dolore, voluptas atque dolorum, aut quaerat
                                mollitia molestias commodi. Molestiae voluptatem veritatis necessitatibus et possimus.
                            </p>
                            <a href="#" class="btn btn-secondary"> <i class="bi bi-chevron-right"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Learn More-->
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="img/course.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h2>Our Courses</h2>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam odit cupiditate
                        maiores ex consequatur illum obcaecati assumenda? Dolores earum dolor est, cum repellat veniam
                        illum eligendi ipsa deleniti laboriosam quam!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero sunt voluptate nostrum
                        perferendis corrupti porro animi eos molestias, doloribus adipisci ullam repellendus unde aut
                        maiores voluptas rerum. Tempore, sequi. Laborum!</p>
                    <a href="#" class="btn btn-secondary">
                        <i class="bi bi-chevron-right"></i>
                        Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!--Lecturers-->
    <section id="instructors" class="p-5" style="background: linear-gradient(to right, #1f959b , #b19cd9);">
        <div class="container">
            <h2 class="text-center text-white">Our Lecturers</h2>
            <p class="lead text-center text-white mb-5">
                Our Lecturers are trained proffessionals with relevant years of experience
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/20.jpg" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">John Snow</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/48.jpg" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">Arya Stark</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/10.jpg" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">William Tarley</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/17.jpg" class="rounded-circle mb-3" alt="" />
                            <h3 class="card-title mb-3">Denarys Bowley</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                            </p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Questions-->
    <section id="questions" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="questions">
                <!-- Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one">
                            Where exactly are you located?
                        </button>
                    </h2>
                    <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two">
                            How much does it cost to attend?
                        </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three">
                            What extra-curriculars are available?
                        </button>
                    </h2>
                    <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-four">
                            How do I sign up?
                        </button>
                    </h2>
                    <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-five">
                            How do I apply for financial aid?
                        </button>
                    </h2>
                    <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                            beatae fuga animi distinctio perspiciatis adipisci velit maiores
                            totam tempora accusamus modi explicabo accusantium consequatur,
                            praesentium rem quisquam molestias at quos vero. Officiis ad
                            velit doloremque at. Dignissimos praesentium necessitatibus
                            natus corrupti cum consequatur aliquam! Minima molestias iure
                            quam distinctio velit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Map -->
    <section class="p-5 bg-dark" >
        <div class="container ">
            <div class="row g-4">
                <div class="col-md">
                    <img class="img-fluid  w-50 d-none d-sm-block" src="img/fhlogo.png" alt="" />
                </div>
                <div class="col-md">
                    <h2 class="text-center mb-4 text-light">Contact Us</h2>
                    <ul class="list-group list-group-flush lead ">
                        <li class="list-group-item bg-dark text-secondary">
                            <span class="fw-bold">Main Location:</span> Lane Ville Hill Nairobi, Kenya
                        </li>
                        <li class="list-group-item bg-dark text-secondary">
                            <span class="fw-bold">Enrollment Phone:</span> (+255) 777 798 6782
                        </li>
                        <li class="list-group-item bg-dark text-secondary">
                            <span class="fw-bold">Customer Care:</span> (+255) 123 456 7890
                        </li>
                        <li class="list-group-item bg-dark text-secondary">
                            <span class="fw-bold">Enrollment Email:</span> fhills@school.edu
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="p-1 bg-secondary text-light text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 Faraday Hills University</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-1">
                <i class="bi bi-arrow-up-circle h1 link-light"></i>
            </a>
        </div>
    </footer>

    <!-- Registration Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enrollLabel">Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--Registration Form-->
                <form action="" method="POST">
                    <div class="modal-body">
                        <p class="lead">Kindly fill out this form</p>
                        <div class="mb-3">
                            <label for="first_name" class="col-form-label">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required />
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="col-form-label">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required />
                        </div>
                        <div class="mb-3">
                            <label for="course" class="col-form-label">Course:</label>
                            <input type="text" class="form-control" id="course" name="course" required />
                        </div>
                       
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                            Close
                        </button>
                        <input type="submit" class="btn btn-success" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Login Modal-->
    <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-lbl">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--Login Form-->
                <form action="process_login.php" method="POST">
                    <div class="modal-body">
                        <p class="lead">Welcome Back!</p>
                            

                        <div class="mb-3">
                            <label for="userName" class="col-form-label">
                                Username:
                            </label>
                            <input type="text" class="form-control" id="userName" name="username" required />
                        </div>
                        <div class="mb-3">
                            <label for="passWord" class="col-form-label">Password:</label>
                            <input type="password" class="form-control" id="passWord" name="password" required />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                            Close
                        </button>

                        <input type="submit" class="btn btn-success" value="login">


                    </div>
                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>