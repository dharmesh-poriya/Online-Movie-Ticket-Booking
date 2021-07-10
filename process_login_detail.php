<?php

include('config.php');
session_start();
if (isset($_POST['loginSubmit'])) {
    $email_id = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];
    $sql = "SELECT * FROM `tbl_registration` WHERE (`email`='$email_id' AND `password`='$password');";
    $login_result = mysqli_query($con, $sql);
    if (!$login_result) {
        echo " <script>
            alert('Data not found');
            location.replace('index.php');
        </script>";
    } else {
        $usr = mysqli_fetch_assoc($login_result);
        if (!$usr) {
            echo " <script>
            alert('Email ID or Password was wrong!!');
            location.replace('login.php');
        </script>";
        } else {
            $_SESSION['user'] = $usr['user_id'];
            if (isset($_POST['rememberMe'])) {
                $expire = 1 * 30 * 24 * 3600;
                setcookie('id', $_SESSION['user'], $expire);
                $_SESSION['remember'] = $_COOKIE['id'];
            }
            echo " <script>
                    alert('Login Successfull!!');
                    location.replace('index.php');
                    </script>";
        }
    }
} else {
    echo " <script>
            alert('Please fill data');
            location.replace('index.php');
        </script>";
}
