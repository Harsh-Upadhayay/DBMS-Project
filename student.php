<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="student/student_style.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <br>
            <div class="navs">
                <div class="img">
                    <img class="icon" src="student/156.12-male-student-i-icon-iconbunny.jpg" alt="">
                </div>
                <div class="who">Student Name</div>
            </div>
            <br>
            <hr class="f">


            <div class="links">
                <div class="sec">
                    <a href="/home.html">
                        <img class="logo" src="student/home_FILL0_wght400_GRAD0_opsz48.svg" width="10%" alt="">
                        <div class="tags">Home</div>
                    </a>
                </div>
                <!-- <b r> -->
                <!-- <hr> -->

                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="student/library_books_FILL0_wght400_GRAD0_opsz48.svg" width="10%" alt="">
                        <div class="tags">Courses</div>
                    </a>
                </div>
                <!-- <hr> -->

                <!-- <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="/teacher-svgrepo-com .svg" width="10%" alt="">
                        <div class="tags">Faculties</div>
                    </a>
                </div> -->
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="student/reporting-svgrepo-com.svg" width="10%" alt="">
                        <div class="tags">Marksheet Report</div>
                    </a>
                </div>
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="student/exam-svgrepo-com.svg" width="10%" alt="">
                        <div class="tags">Exam</div>
                    </a>
                </div>
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="student/profile-user-svgrepo-com.svg" width="10%" alt="">
                        <div class="tags">Profile</div>
                    </a>
                </div>
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="student/logout-svgrepo-com.svg" width="10%" alt="">
                        <div class="tags">Logout</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="top">
                <div class="last_seen">
                    <span>
                        Welcome Student
                    </span>
                    <div>
                        Last Login : 15-Oct-2022 04:10:00 AM
                        <!-- yhah pr last login wala time ayega backend se -->
                    </div>
                </div>
                <br>
                <br>

                <div class="des">Home Page </div>

                <br><br><br>
            </div>
            <br>
            <br>
            <div class="content">
                <a class="catagory" href="student.php">
                    <br>
                    <img src="student/profile-user-svgrepo-com.svg" width="50%" alt="">
                    <br>
                    <br>
                    <div>Your Profile</div>
                    <!-- <div class="count">34</div> -->
                    <!-- <br> -->
                </a>
                <a class="catagory" href="backend/course-info.php">
                    <!-- <br> -->
                    <img src="student/kindpng_4634183.png" width="50%" alt="">
                    <div>Your Courses</div>
                    <div class="count">6</div>
                    <!-- <br> -->
                </a>
                

                <!-- <br> -->
                <a class="catagory" href="http://">
                    <!-- <br> -->
                    <img src="student/teacher-svgrepo-com .svg" width="50%" alt="">
                    <!-- <br>
                    <br> -->
                    <div>Marksheet Report</div>
                    <div class="count"></div>
                    <!-- <br> -->
                </a>
                <a class="catagory" href="http://">
                    <!-- <br> -->
                    <img src="student/exam-svgrepo-com.svg" width="50%" alt="">
                    <br>
                    <div>Exam</div>
                    <div class="count"></div>
                    <!-- <br> -->
                </a>
                <!-- <a class="catagory" href="http://">
                    <img src="/college-svgrepo-com.svg" width="80%" alt="">
                    <div>Students</div>
                </a> -->
            </div>
        </div>
    </div>

</body>

</html>