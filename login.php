<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login/login_style.css" />

    <script>
        function call1() {
            document.getElementById("student").style.backgroundColor = "#6170b9";
            document.getElementById("faculty").style.backgroundColor = "#6170b9";
            document.getElementById("admin").style.backgroundColor = "#7080cf";
            document.getElementById("admin_form").style.display = "initial";
            document.getElementById("faculty_form").style.display = "none";
            document.getElementById("student_form").style.display = "none";
        }
        function call2() {
            document.getElementById("admin").style.backgroundColor = "#6170b9";
            document.getElementById("faculty").style.backgroundColor = "#7080cf";
            document.getElementById("student").style.backgroundColor = "#6170b9";
            document.getElementById("admin_form").style.display = "none";
            document.getElementById("faculty_form").style.display = "initial";
            document.getElementById("student_form").style.display = "none";
        }
        function call3() {
            document.getElementById("admin").style.backgroundColor = "#6170b9";
            document.getElementById("faculty").style.backgroundColor = "#6170b9";
            document.getElementById("student").style.backgroundColor = "#7080cf";
            document.getElementById("admin_form").style.display = "none";
            document.getElementById("faculty_form").style.display = "none";
            document.getElementById("student_form").style.display = "initial";
        }
    </script>
</head>

<body>
    <div class="topic">Login</div>

    <div class="contain">
        <div class="choose">
            <div id="admin" onclick="call1()">Admin</div>
            <div id="faculty" onclick="call2()">Faculty</div>
            <div id="student" onclick="call3()">Student</div>
        </div>

        <div class="form">
            <div id="admin_form">
                <form action="index.php" method="post">
                    <div class="imgcontainer">
                        <img src="login/user.jpeg" alt="Avatar" class="avatar" />
                    </div>

                    <div class="container">
                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required />

                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required />
                        <br />
                        <br />
                        <button type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember" />
                            Remember me
                        </label>
                    </div>

                    <!-- <div class="container" style="background-color:#f1f1f1"> -->
                    <!-- <button type="button" class="cancelbtn">Cancel</button> -->
                    <!-- <span class="password">Forgot <a href="#">password?</a></span> -->
                    <!-- </di v> -->
                </form>
            </div>
            <div id="faculty_form">
                <form action="index.php" method="post">
                    <div class="imgcontainer">
                        <img src="login/faculty-icon-7.jpeg" alt="Avatar" class="avatar" />
                    </div>

                    <div class="container">
                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required />

                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required />
                        <br />
                        <br />
                        <button type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember" />
                            Remember me
                        </label>
                    </div>

                    <!-- <div class="container" style="background-color:#f1f1f1"> -->
                    <!-- <button type="button" class="cancelbtn">Cancel</button> -->
                    <!-- <span class="password">Forgot <a href="#">password?</a></span> -->
                    <!-- </di v> -->
                </form>
            </div>

            <div id="student_form">
                <form action="index.php" method="post">
                    <div class="imgcontainer">
                        <img src="login/156.12-male-student-i-icon-iconbunny.jpg" alt="Avatar" class="avatar" />
                    </div>

                    <div class="container">
                        <label for="username"><b>Roll Number</b></label>
                        <input type="text" placeholder="Enter Roll Number" name="username" required />

                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required />
                        <br />
                        <br />
                        <button type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember" />
                            Remember me
                        </label>
                    </div>

                    <!-- <div class="container" style="background-color:#f1f1f1"> -->
                    <!-- <button type="button" class="cancelbtn">Cancel</button> -->
                    <!-- <span class="password">Forgot <a href="#">password?</a></span> -->
                    <!-- </di v> -->
                </form>
            </div>
        </div>
    </div>
</body>

</html>