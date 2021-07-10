<?php
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>

    <style>
        body {
            background: url('https://images.freeimages.com/images/small-previews/4cb/blank-free-photos-1171921.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;


        }

        .password {
            margin-top: 80px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 100px;
            width: 400px;
            height: auto;
            justify-content: center;
            padding-top: 30px;
            padding-bottom: 20px;
            opacity: 0.9;

        }

        input[type="password"] {
            display: block;
            padding: 5px;
            margin: 15px;
            border-radius: 15px;
            text-align: center;
            background-image: radial-gradient(rgba(224, 230, 124), rgba(136, 169, 235));
        }

        button,
        input[type="submit"] {
            width: 210px;
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

        button:hover,
        input[type="submit"]:hover {
            background-image: radial-gradient(white, rgba(12, 13, 12));
            color: black;
            font-size: large;
            font-weight: bolder;
        }

        input[type="password"]:hover {
            background-image: radial-gradient(white, rgba(12, 13, 12));
            color: black;
        }

        input:focus {
            background-image: linear-gradient(rgb(182, 183, 240), rgb(228, 228, 242));
            color: black;
        }

        input::placeholder {
            text-align: center;
            font-size: large;
            color: black;
            font-weight: lighter;
        }

        .password h2 {
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
    <div class="password">
        <center>
            <h2>Password</h2>
            <form action="process_changing_password.php" method="post">
                <input type="password" name="currentPassword" size="35" placeholder="Current Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Your Password contain minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character" required />

                <input id="password" name="newPassword" size="35" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Your Password contain minimum eight characters and maximum fifteen characters, at least one uppercase letter, one lowercase letter, one number and one special character' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="New Password" required>

                <input id="password_two" name="cnewPassword" size="35" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Confirm New Password" required>

                <input type="submit" name="passSubmit" value="Continue" />
                <button onclick="myFunctionForgotPass()">Forgot Password ?</button>
            </form>
        </center>
    </div>
    <script>
        function myFunctionForgotPass() {
            var r = confirm("Are you sure , you want to forgot your password?");
            if (r == true) {
                window.location.href = "process_forgot_password.php";
            } else {
                window.location.href = "change_password.php";
            }
        }
    </script>
    <br><br><br>
    <?php
    include('footer.php');
    ?>
</body>

</html>