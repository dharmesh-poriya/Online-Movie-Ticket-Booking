<?php
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      text-decoration: none;
    }

    a {
      text-decoration: none;
    }

    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }

    .container {
      padding: 0 16px;
    }

    .container::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 87%;
    }

    .button:hover {
      background-color: #555;
    }

    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
  </style>
  <title>About Us</title>
</head>

<body>
  <br><br><br>
  <div class="about-section">
    <h1>About Us</h1>
    <h3>This Website made by Chintu Bhanderi, Dharmesh poriya, Jeet Savsani,
      We all study in DDIT(nadiad) In Computer Engineering..</h3>
    <h4>In this Project. we use Html,Css,Little Javascript for Frontend and Mainly Use PHP and MySQL for backend.
      This Project is all about Online movie Tickets.
      If user are Anywhere Than they Book Movie Tickets From website.
    </h4>

  </div>

  <h2 style="text-align:center">Our Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="image/our_team_pic/jeet.jpeg" alt="JEET" height="400px" width="400px">
        <div class="container">
          <center>
            <h2>Jeet Savsani</h2>
          </center>
          <p class="title">CE106</p>
          <p>“I am ambitious and driven. I thrive on challenge and constantly set goals for myself, so I have something to strive toward. I'm not comfortable with settling, and I'm always looking for an opportunity to do better and achieve greatness.</p>
          <br>
          <p>jeetsavsani42@gmail.com</p><br>
          <p>Click on below Butten For Connect with Linkedln</p><br>
          <center>
            <a href="https://www.linkedin.com/in/jeet-savsani-1b56b7201/" target="_blank" class="button">Connect With Linkedln</a>
          </center>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="image/our_team_pic/raxit.jpeg" alt="xyz" height="400px" width="400px">
        <div class="container">
          <center>
            <h2>Chintu Bhanderi</h2>
          </center>
          <p class="title">CE018</p>
          <p>“I am ambitious and driven. I thrive on challenge and constantly set goals for myself, so I have something to strive toward. I'm not comfortable with settling, and I'm always looking for an opportunity to do better and achieve greatness.</p>
          <br>
          <p>raxitbhanderi@gmail.com</p><br>
          <p>Click on below Butten For Connect with Linkedln</p><br>
          <center>
            <a href="https://www.linkedin.com/in/jeet-savsani-1b56b7201/" target="_blank" class="button">Connect With Linkedln</a>
          </center>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="image/our_team_pic/dharmesh.jpg" alt="abc" height="400px" width="400px">
        <div class="container">
          <center>
            <h2>Poriya Dharmesh</h2>
          </center>
          <p class="title">CE098</p>
          <p>“I am ambitious and driven. I thrive on challenge and constantly set goals for myself, so I have something to strive toward. I'm not comfortable with settling, and I'm always looking for an opportunity to do better and achieve greatness.</p><br>
          <p>dharmeshkporiya@gmail.com</p><br>
          <p>Click on below Butten For Connect with Linkedln</p><br>
          <center>
            <a href="https://www.linkedin.com/in/dharmesh-poriya-197626205/" target="_blank" class="button">Connect With Linkedln</a>
          </center>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<?php
include('footer.php');
?>