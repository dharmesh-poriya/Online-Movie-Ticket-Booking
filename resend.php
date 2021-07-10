<?php
session_start();
include('config.php');
$user_id = $_SESSION['user'];

if (isset($_POST["otp1"])) {
  if (isset($_COOKIE["user"])) {
    if ($_POST["otp_val"] == $_POST["otp"]) {

      $m_sno = $_SESSION['m_sno'];
      $porson = $_SESSION['porson'];
      $is_member = $_SESSION['is_member'];
      $movie_type = $_SESSION['movie_type'];

      $sql3 = "INSERT INTO `$movie_type` (`u_sno`, `is_member`, `m_sno`, `total_member`) VALUES ('$user_id', '$is_member', '$m_sno', '$porson')";
      $result3 = mysqli_query($con, $sql3);



      echo " <script>
            alert('Your payment has been sucessfully');
            location.replace('ticket.php');
        </script>";
    } else {
      echo " <script>
            alert('OTP is invalid, Plz Enter Currect OTP');
            location.replace('resend.php');
        </script>";
    }
  }
} else {

  $sql = "SELECT * FROM `tbl_registration` WHERE `user_id` LIKE '$user_id'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);


  $cookie_name = "user";
  $otp_val = random_int(100000, 999999);
  setcookie($cookie_name, $otp_val, time() + 120);

  $to = $row['email'];
  $subject = "email";

  $message = $otp_val;

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  $headers .= 'From: <webmaster@example.com>' . "\r\n";

  if (!mail($to, $subject, $message, $headers))
    echo 'ERROR';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Code Verification</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

    html,
    body {
      background: #6665ee;
      font-family: "Poppins", sans-serif;
    }

    ::selection {
      color: #fff;
      background: #6665ee;
    }

    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .container .form {
      background: #fff;
      padding: 30px 35px;
      border-radius: 5px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
        0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .container .form form .form-control {
      height: 40px;
      font-size: 15px;
    }

    .container .form form .forget-pass {
      margin: -15px 0 15px 0;
    }

    .container .form form .forget-pass a {
      font-size: 15px;
    }

    .container .form form .button {
      background: #6665ee;
      color: #fff;
      font-size: 17px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .container .form form .button:hover {
      background: #5757d1;
    }

    .container .form form .link {
      padding: 5px 0;
    }

    .container .form form .link a {
      color: #6665ee;
    }

    .container .login-form form p {
      font-size: 14px;
    }

    .container .row .alert {
      font-size: 14px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form">
        <form action="" method="POST" autocomplete="off">
          <h2 class="text-center">OTP Verification</h2>

          <div class="alert alert-success text-center">
            <div class="alert alert-danger text-center">
              Please check Your Email.<br>
              And Enter Your OTP Here Within Two Minutes.
            </div>
          </div>

          <div class="form-group">
            <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required />
          </div>
          <div class="form-group">
            <input type="hidden" value="<?php echo $otp_val; ?>" name="otp_val">
            <input class="form-control button" type="submit" name="otp1" />
            <br>
            <a href="resend.php">Resend OTP</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>