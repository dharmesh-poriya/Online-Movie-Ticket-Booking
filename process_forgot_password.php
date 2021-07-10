<?php
include('config.php');
session_start();
  $user_id1 = $_SESSION['user'];
  $sql = "SELECT * FROM `tbl_registration` WHERE `user_id`='$user_id1';";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  $user_id2 = $row['user_id'];
  $email_id = $row['email'];
  $username = $row['name'];
  $token = $row['token'];
  if ($user_id1 == $user_id2) {
    $to = $email_id;
    $txt = "Hi, $username. Click http://localhost/dporiya/PHP_Project/My_New_Website/reset_password.php?token=$token to reset the password";
    $headers = "From: d.poriya05@gmail\r\n";
    $subject = "Reset Your Password";
    $msg = mail($to, $subject, $txt, $headers);
    if ($msg) {
      echo " <script>
            alert('We have been sended one link in your registred gmail account.');
            location.replace('index.php');
        </script>";
    } else {
      echo " <script>
            alert('Something went!! wrong mail not be sent.');
            location.replace('index.php');
        </script>";
    }
  } else {
    echo 'invalid userid';
  }
