<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <style>
        body {
            /* background: url('image/water.gif'); */
            background: url('https://images.pexels.com/photos/567985/pexels-photo-567985.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
            background-repeat: no-repeat;
            background-size: cover;

        }

        .form {
            margin-top: 60px;
            padding-top: 35px;
            width: 500px;
            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrDaSEd24xxvpjSrd2we81xVfslW4GXY4LuxMMfW2YVu4q3wR0LnVGS41OK6buOVlrc10&usqp=CAU');
            border: 2px solid blue;
            border-radius: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            display: block;
            padding: 5px;
            margin: 15px;
            border-radius: 15px;
            text-align: center;
            background-image: radial-gradient(rgba(224, 230, 124), rgba(136, 169, 235));
            color: black;
        }

        input:focus {
            background-image: linear-gradient(rgb(182, 183, 240), rgb(228, 228, 242));
            color: black;
        }

        input::placeholder {
            text-align: center;
            font-size: medium;
            color: black;
            opacity: 0.5;
        }

        input[type="tel"] {
            width: 285px;
        }

        input[type="submit"] {
            width: 180px;
            display: block;
            padding: 5px;
            margin: 15px;
            border-radius: 15px;
            font-size: large;
            text-align: center;
            background-color: blue;
            color: white;
            font-weight: bolder;
            margin-top: 30px;
        }

        input[type="submit"]:hover {
            background-image: radial-gradient(white, rgba(12, 13, 12));
            color: black;
            font-size: large;
            font-weight: bolder;
            cursor: pointer;
        }

        input:focus {
            background-color: lightblue;
            color: white;
        }

        input::placeholder {
            text-align: center;
            color: black;
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
    </style>
</head>

<body>
    <br><br><br>
    <center>
        <div class="form">
            <h2>Register Here !!</h2>
            <form action="process_registration_detail.php" method="post">
                <input name="name" type="text" size="25" placeholder="User_Name" pattern="[a-z][a-z0-9]{3,9}" title="Username should be started with lowercase letters and it only contain lowercase letters and digit and should be less than 9 character. e.g. rocky09" required />

                <input name="phone" type="tel" size="35" placeholder="Mobile Number" pattern="[6789][0-9]{9}" title="mobile number should be 10 digit only and started with 6,7,8 or 9 digit otherwise not valid" required />

                <input name="email" type="email" size="45" placeholder="Email" title="eg. rocky08@gmail.com" required />

                <input name="city" type="text" size="45" placeholder="City" pattern="[a-z]{3,15}" title="city should only contain lowercase letters. e.g. Surat" required />

                <input name="password" type="password" size="35" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password should contain minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character" required />

                <input name="cpassword" type="password" size="25" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password should contain minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character" placeholder="Confirm Password" required />

                <input type="submit" name="submit" size="25" value="Continue">

            </form>
        </div>
    </center>
    <br><br><br>
    <?php include('footer.php'); ?>
</body>

</html>