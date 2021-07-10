<?php
include('config.php');
session_start();
$send_in_this = $_POST['forgotloginEmail'];
$sql = "SELECT * FROM `tbl_registration` WHERE `email`='$send_in_this';";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
if (!$row) {
  echo " <script>
alert('Entered email id is not exist.');
location.replace('change_password.php');
</script>";
} else {


  $email_id = $row['email'];
  $username = $row['name'];
  $token = $row['token'];
  if ($email_id == $send_in_this) {
    $to = $email_id;
    $txt = "Hi, $username. Click http://localhost/dporiya/PHP_Project/My_New_Website/reset_password.php?token=$token to reset the password";

    $headers = "From: d.poriya05@gmail\r\n";
    $subject = "Reset Your Password";
    $msg = mail($to, $subject, $txt, $headers);
    if ($msg) {
      echo " <script>
            alert('We have been sended one link in your registred gmail account.');
            location.replace('login.php');
        </script>";
    } else {
      echo " <script>
            alert('Something went!! wrong mail not be sent.');
            // location.replace('index.php');
        </script>";
    }
  } else {
    echo 'invalid userid';
  }
}
