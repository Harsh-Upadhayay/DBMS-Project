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
    <link rel="stylesheet" href="admin/admin_style.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <br>
            <div class="navs">
                <div class="img">
                    <img class="icon" src="admin/user.jpeg" alt="">
                </div>
                <div class="who">Administrator</div>
            </div>
            <br>
            <hr class="f">


            <div class="links">
                <div class="sec">
                    <a href="/home.html">
                        <img class="logo" src="admin/home_FILL0_wght400_GRAD0_opsz48.svg" width="10%" alt="">
                        <div class="tags">Home</div>
                    </a>
                </div>
                <!-- <b r> -->
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="/admin_department.html">
                        <img class="logo" src="admin/college-svgrepo-com.svg" width="10%" alt="">
                        <div class="tags">Departments</div>
                    </a>
                </div>
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="admin/library_books_FILL0_wght400_GRAD0_opsz48.svg" width="10%" alt="">
                        <div class="tags">Courses</div>
                    </a>
                </div>
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="admin/icons8-student-60.png" width="10%" alt="">
                        <div class="tags">Students</div>
                    </a>
                </div>
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="admin/teacher-svgrepo-com .svg" width="10%" alt="">
                        <div class="tags">Faculties</div>
                    </a>
                </div>
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="admin/reporting-svgrepo-com.svg"  width="10%" alt="">
                        <div class="tags">Marksheet Report</div>
                    </a>
                </div>
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="admin/exam-svgrepo-com.svg"  width="10%" alt="">
                        <div class="tags">Exam</div>
                    </a>
                </div>
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="admin/profile-user-svgrepo-com.svg" width="10%" alt="">
                        <div class="tags">Admin Profile</div>
                    </a>
                </div>
                <!-- <hr> -->
                <br>
                <div class="sec">
                    <a href="http://">
                        <img class="logo" src="admin/logout-svgrepo-com.svg" width="10%" alt="">
                        <div class="tags">Logout</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="top">
                <div class="last_seen">
                    <span>
                        Welcome Administrator
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
                <a class="catagory" href="/admin_department.html">
                    <!-- <br> -->
                    <!-- <br> -->
                    <img src="admin/college-svgrepo-com.svg" width="50%" alt="">
                    <div>Departments</div>
                    <div class="count">4</div> 
                    <!-- yhah pr backend se data ayega -->
                    <!-- <br> -->
                </a>
                <a class="catagory" href="http://">
                    <!-- <br> -->
                    <img src="admin/kindpng_4634183.png" width="50%" alt="">
                    <div>Courses</div>
                    <div class="count">60</div>
                    <!-- <br> -->
                </a>
                <!-- <br> -->
                <a class="catagory" href="http://">
                    <!-- <br> -->
                    <img src="admin/teacher-svgrepo-com .svg" width="50%" alt="">
                    <div>Faculties</div>
                    <div class="count">44</div>
                    <!-- <br> -->
                </a>
                <a class="catagory" href="/student.html">
                    <!-- <br> -->
                    <img src="admin/icons8-student-60.png" width="50%" alt="">
                    <div>Students</div>
                    <div class="count">34</div>
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