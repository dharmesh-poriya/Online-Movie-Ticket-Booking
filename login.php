<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background: url('https://images.pexels.com/photos/567985/pexels-photo-567985.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
            background-repeat: no-repeat;
            background-size: cover;

        }

        .form {
            margin-top: 100px;
            width: 410px;
            height: 420px;
            padding-top: 35px;
            border: 2px solid blue;
            border-radius: 30px;
            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrDaSEd24xxvpjSrd2we81xVfslW4GXY4LuxMMfW2YVu4q3wR0LnVGS41OK6buOVlrc10&usqp=CAU');
            background-size: cover;
        }

        input {
            display: block;
            padding: 5px;
            margin: 15px;
            border-radius: 15px;
            background-color: #cccccc;
            text-align: center;
        }

        input[type="submit"] {
            width: 160px;
            background-color: blue;
            color: white;
            font-size: large;
            font-weight: bold;
        }

        input:hover {
            background-color: lightgreen;
            color: black;
        }

        input[type="submit"]:hover {
            background-image: radial-gradient(rgba(221, 223, 237), rgba(129, 148, 240));
            color: black;
            font-weight: bolder;
        }

        input:focus {
            background-image: radial-gradient(pink, white, lightblue);
            color: black;
            font-weight: bold;
        }

        input::placeholder {
            text-align: center;
            font-size: large;
            color: black;
            opacity: 0.5;
        }

        .form input[type="checkbox"] {
            display: inline-block;
            width: 20px;
            height: 20px;
        }

        .form label {
            color: white;
            font-size: large;
            font-weight: bolder;
        }

        .form h2 {
            margin-left: auto;
            margin-right: auto;
            display: inline-block;
            color: white;
            font-size: xx-large;
            background-image: radial-gradient(rgba(99, 101, 247), rgba(12, 13, 12));
            border-radius: 15px;
            padding: 0px 25px;
            margin-bottom: 25px;
        }

        .container a {
            color: white;
            font-size: medium;
            font-weight: bold;
        }

        .container a:hover {
            color: red;
            font-size: large;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <br><br><br>
    <center>
        <div class="form">
            <h2>Login</h2>
            <form action="process_login_detail.php" method="post">

                <input type="email" name="loginEmail" size="35" placeholder="Email" required />

                <input type="password" name="loginPassword" size="35" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Your Password contain minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character" required />

                <input type="checkbox" name="rememberMe" id="rem"><label for="rem">Remember Me</label>

                <input type="submit" name="loginSubmit" value="Continue">

            </form>
            <div class="container">
                <center>
                    <a href="registration.php">Dont have an account?</a><br>
                    <a href="forgot_by_login.php">Forgot Password?</a>
                </center>
            </div>
        </div>
    </center>
    <br><br><br><br><br>
    <?php include('footer.php'); ?>
</body>

</html>