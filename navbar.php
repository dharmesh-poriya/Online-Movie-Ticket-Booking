<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Online Movie Ticket Booking</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
    }

    .wrapper {
      background: url('http://24.media.tumblr.com/tumblr_m9jk9q6nSe1rc7pm9o1_500.gif');
      position: fixed;
      width: 100%;
      z-index: 1;
    }

    .wrapper nav {
      position: relative;
      display: flex;
      max-width: calc(100% - 200px);
      margin: 0 auto;
      height: 70px;
      align-items: center;
      justify-content: space-between;
    }

    nav .content {
      display: flex;
      align-items: center;
    }

    nav .content .links {
      margin-left: 80px;
      display: flex;
    }

    .content .logo a {
      color: #fff;
      font-size: 30px;
      font-weight: bolder;
    }

    .content .links li {
      list-style: none;
      line-height: 70px;
    }

    .content .links li a,
    .content .links li label {
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      padding: 9px 17px;
      border-radius: 5px;
      transition: all 0.3s ease;
    }

    .content .links li label {
      display: none;
    }

    .content .links li a:hover,
    .content .links li label:hover {
      background-image: radial-gradient(white, orange);
      border-bottom: 2px solid blue;
      border-right: 2px solid blue;
      border-radius: 20px;
      color: black;
      font-weight: bold;
    }

    .wrapper .search-icon,
    .wrapper .menu-icon {
      color: #fff;
      font-size: 18px;
      cursor: pointer;
      line-height: 70px;
      width: 70px;
      text-align: center;
    }

    .wrapper .menu-icon {
      display: none;
    }

    .wrapper #show-search:checked~.search-icon i::before {
      content: "\f00d";
    }

    .wrapper .search-box {
      position: absolute;
      height: 100%;
      max-width: calc(100% - 50px);
      width: 100%;
      opacity: 0;
      pointer-events: none;
      transition: all 0.3s ease;
    }

    .wrapper #show-search:checked~.search-box {
      opacity: 1;
      pointer-events: auto;
    }

    .search-box input {
      width: 98%;
      height: 60%;
      border: none;
      outline: none;
      font-size: 17px;
      /* color: #fff;
      background: #171c24; */
      border-bottom: 2px solid blue;
      border-right: 2px solid blue;
      border-radius: 20px;
      background: url('https://data.whicdn.com/images/38613371/original.gif');
      color: white;
      font-weight: bold;
      padding: 0 100px 0 15px;
    }

    .search-box input::placeholder {
      color: #f2f2f2;
    }

    .search-box .go-icon {
      position: absolute;
      right: 20px;
      top: 30%;
      transform: translateY(-50%);
      line-height: 20px;
      width: 30px;
      background: #171c24;
      border: none;
      outline: none;
      /* color: #fff;
      font-size: 20px; */
      background-image: radial-gradient(white, orange);
      border-bottom: 2px solid blue;
      border-right: 2px solid blue;
      border-radius: 20px;
      color: black;
      font-weight: bold;
      cursor: pointer;
    }

    .wrapper input[type="checkbox"] {
      display: none;
    }

    /* Dropdown Menu code start */
    .content .links ul {
      position: absolute;
      background: #171c24;
      top: 80px;
      z-index: -1;
      opacity: 0;
      visibility: hidden;
    }

    .content .links li:hover>ul {
      top: 70px;
      opacity: 1;
      visibility: visible;
      transition: all 0.3s ease;
    }

    .content .links ul li a {
      display: block;
      width: 100%;
      line-height: 30px;
      border-radius: 0px !important;
    }

    .content .links ul ul {
      position: absolute;
      top: 0;
      right: calc(-100% + 8px);
    }

    .content .links ul li {
      position: relative;
    }

    .content .links ul li:hover ul {
      top: 0;
    }

    /* Responsive code start */
    @media screen and (max-width: 1250px) {
      .wrapper nav {
        max-width: 100%;
        padding: 0 20px;
      }

      nav .content .links {
        margin-left: 30px;
      }

      .content .links li a {
        padding: 8px 13px;
      }

      .wrapper .search-box {
        max-width: calc(100% - 100px);
      }

      .wrapper .search-box input {
        padding: 0 100px 0 15px;
      }
    }

    @media screen and (max-width: 900px) {
      .wrapper .menu-icon {
        display: block;
      }

      .wrapper #show-menu:checked~.menu-icon i::before {
        content: "\f00d";
      }

      nav .content .links {
        display: block;
        position: fixed;
        background: url('http://24.media.tumblr.com/tumblr_m9jk9q6nSe1rc7pm9o1_500.gif');
        height: 100%;
        width: 100%;
        top: 70px;
        left: -100%;
        margin-left: 0;
        max-width: 350px;
        overflow-y: auto;
        padding-bottom: 100px;
        transition: all 0.3s ease;
      }

      nav #show-menu:checked~.content .links {
        left: 0%;
      }

      .content .links li {
        margin: 15px 20px;
      }

      .content .links li a,
      .content .links li label {
        line-height: 40px;
        font-size: 20px;
        display: block;
        padding: 8px 18px;
        cursor: pointer;
      }

      .content .links li a.desktop-link {
        display: none;
      }

      .content .links ul,
      .content .links ul ul {
        position: static;
        opacity: 1;
        visibility: visible;
        background: none;
        max-height: 0px;
        overflow: hidden;
      }

      .content .links #show-features:checked~ul,
      .content .links #show-services:checked~ul,
      .content .links #show-items:checked~ul {
        max-height: 100vh;
      }

      .content .links ul li {
        margin: 7px 20px;
      }

      .content .links ul li a {
        font-size: 18px;
        line-height: 30px;
        border-radius: 5px !important;
      }
    }

    @media screen and (max-width: 400px) {
      .wrapper nav {
        padding: 0 10px;
      }

      .content .logo a {
        font-size: 27px;
      }

      .wrapper .search-box {
        max-width: calc(100% - 70px);
      }

      .wrapper .search-box input::placeholder {
        color: black;
      }

      .wrapper .search-box .go-icon {
        width: 30px;
        right: 0;
      }

      .wrapper .search-box input {
        padding-right: 30px;
      }

    }
  </style>
</head>

<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
        <div class="logo"><a href="index.php">Cineplex</a></div>
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about2.php">AboutUs</a></li>
          <li><a href="membership.php">Membership</a></li>
          <li>
            <?php if (isset($_SESSION['user'])) {
              $us  = mysqli_query($con, "SELECT * FROM tbl_registration WHERE user_id='" . $_SESSION['user'] . "'");
              $user = mysqli_fetch_array($us); ?><a href="profile.php"><?php echo $user['name']; ?></a><a href="logout.php">Logout</a><?php } else { ?><a href="login.php">Login</a> <a href="registration.php">Register</a><?php } ?>
          </li>
          <li><a href="contact.php">ContactUs</a></li>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
</body>

</html>