<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: url('image/bg.jpg');
        }

        .movie1 {
            background: url('https://thumbs.dreamstime.com/b/planks-dark-old-wood-texture-background-170515350.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            margin: auto;
            margin-left: 2%;
            margin-right: 2%;
            border: 2px solid blue;
            width: 95%;
            height: auto;
            justify-content: center;
        }

        .movie1 img {
            margin: auto;
            display: inline-block;
            width: 70%;
            height: 400px;
            border: 2px solid red;
        }

        .movie1 button {
            margin-right: 20px;
            margin-bottom: 20px;
            width: 240px;
            padding: 5px;
            margin-left: 0px;
            font-size: large;
            border-radius: 15px;
            background: url('https://i.pinimg.com/originals/94/ba/53/94ba53dc8a376c9727742a4fd56cf509.gif');
            color: white;
            border: 2px solid blue;
            transform: scale(1.1);
            font-weight: bolder;
        }

        .movie1 h1 {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 25px;
            margin-top: 20px;
            display: inline-block;
            color: white;
            font-size: xx-large;
            background-image: radial-gradient(rgba(99, 101, 247), rgba(12, 13, 12));
            border-radius: 15px;
            padding: 0px 25px;
        }

        @media (max-width:540px) {
            .movie1 button {
                width: 70%;
            }
        }
    </style>
</head>

<body>
    <br><br><br><br>
    <div class="movie1">
        <center>
            <h1>sooryavansham</h1>
        </center>
        <center>
            <img src="https://images.indianexpress.com/2021/04/akshay-1200-1.jpg" alt="">
        </center>
        <br>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Keanu Reeves</h1>
        </center>
        <center>
            <img src="https://filmzone.com/wp-content/uploads/2019/08/Keanu-Reeves-Upcoming-Movies.jpg" alt="">
        </center>
        <br>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>X-Man</h1>
        </center>
        <center>
            <img src="https://filmzone.com/wp-content/uploads/2019/06/X-Men-Days-of-Future-Past.jpg" alt="">
        </center>
        <br>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Marvel</h1>
        </center>
        <center>
            <img src="https://filmzone.com/wp-content/uploads/2019/06/New-MCU-Movie-Avengers-Endgame.jpg" alt="">
        </center>
        <br>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Skater Girl</h1>
        </center>
        <center>
            <img src="https://i.ytimg.com/vi/uIVIAY0CcXI/maxresdefault.jpg" alt="">
        </center>
        <br>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Dom</h1>
        </center>
        <center>
            <img src="https://images-na.ssl-images-amazon.com/images/S/pv-target-images/374c3ec841e4b8c6b599d020b9685d26ee1bfd6c0d1aca5b5705426def3182b7._UY500_UX667_RI_V_TTW_.jpg" alt="">
        </center>
        <br>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Rang De</h1>
        </center>
        <center>
            <img src="https://static.toiimg.com/photo/80073181.jpeg" alt="">
        </center>
        <br>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Sweet Tooth</h1>
        </center>
        <center>
            <img src="https://blogtobollywood.com/wp-content/uploads/2021/06/Sweet-Tooth-Season-1-Netflix-Release-Date-and-Time.jpg" alt="">
        </center>
        <br>
    </div>
    <br><br><br>

    <br>
    <br>
    <br>
    <?php
    include('footer.php');
    ?>
</body>

</html>