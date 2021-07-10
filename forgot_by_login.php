<?php
include('navbar.php');
?>

<br><br><br><br><br>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    form {
      border: 3px solid #f1f1f1;
    }

    input[type=email],
    input[type=password] {
      width: 50%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 10px;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 50%;
      border-radius: 10px;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 20%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      img.avatar {
        width: 50%;
        border-radius: 50%;
      }
    }
  </style>
</head>

<body>
  <form action="process_forgot_pass_by_login.php" method="post">
    <div class="imgcontainer">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa8kZeQTXHnH-XqzPUudceOVW7MC8ci0iRrQ&usqp=CAU" class="avatar">
    </div>

    <div class="container">
      <center>
        <input type="email" placeholder="Enter Email Address" name="forgotloginEmail" required>
        <button type="submit" name="fbylogin" onclick="myFunctionF()">Forgot Password</button><br>
        <label>
      </center>
    </div>
  </form>
  <script>
    function myFunctionF() {
      var r = confirm("Are you sure , you want to Forgot your password?");
      if (r == true) {} else {
        window.location.href = "login.php";
      }
    }
  </script>
</body>

</html>