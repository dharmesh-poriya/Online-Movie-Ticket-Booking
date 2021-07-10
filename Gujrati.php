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
            /* background: ; */
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
            <h1>Date :- 08/07/2021</h1>
        </center>
        <center>
            <a href="https://www.youtube.com/watch?v=xDdyj716gfM&t=1s" target="_blank">
                <img src="https://i.ytimg.com/vi/mNpG1td2lkM/maxresdefault.jpg" alt=""></a>
        </center>
        <br>
        <center>
            <a style="color: white;" href="booking.php?sign=<?php echo "91"; ?>"><button>Morning Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "92"; ?>"><button>Afternoon Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "93"; ?>"><button>Evevning Slot</a>

        </center>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Date :- 09/07/2021</h1>
        </center>
        <center>
            <a href="https://www.youtube.com/watch?v=g1sccSHREiU&t=1s" target="_blank">
                <img src="https://i.ytimg.com/vi/DjUDoTT9Np4/hqdefault.jpg" alt=""></a>
        </center>
        <br>
        <center>
            <a style="color: white;" href="booking.php?sign=<?php echo "94"; ?>"><button>Morning Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "95"; ?>"><button>Afternoon Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "96"; ?>"><button>Evevning Slot</a>
        </center>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Date :- 10/07/2021</h1>
        </center>
        <center>
            <a href="https://www.youtube.com/watch?v=Aw-EeO41DpM&t=1s" target="_blank">
                <img src="https://i.ytimg.com/vi/Aw-EeO41DpM/maxresdefault.jpg" alt=""></a>
        </center>
        <br>
        <center>
            <a style="color: white;" href="booking.php?sign=<?php echo "97"; ?>"><button>Morning Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "98"; ?>"><button>Afternoon Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "99   "; ?>"><button>Evevning Slot</a>
        </center>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Date :- 11/07/2021</h1>
        </center>
        <center>
            <a href="https://www.youtube.com/watch?v=qb8uOylK3R4" target="_blank">
                <img src="https://i.ytimg.com/vi/qb8uOylK3R4/maxresdefault.jpg" alt=""></a>
        </center>
        <br>
        <center>
            <a style="color: white;" href="booking.php?sign=<?php echo "100"; ?>"><button>Morning Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "101"; ?>"><button>Afternoon Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "102"; ?>"><button>Evevning Slot</a>
        </center>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Date :- 12/07/2021</h1>
        </center>
        <center>
            <a href="https://www.youtube.com/watch?v=NcXEuzZhJO8" target="_blank">
                <img src="https://static.toiimg.com/photo/msid-81406600/81406600.jpg" alt=""></a>
        </center>
        <br>
        <center>
            <a style="color: white;" href="booking.php?sign=<?php echo "103"; ?>"><button>Morning Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "104"; ?>"><button>Afternoon Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "105"; ?>"><button>Evevning Slot</a>
        </center>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Date :- 13/07/2021</h1>
        </center>
        <center>
            <a href="https://www.youtube.com/watch?v=hkGaUlIAhZU" target="_blank">
                <img src="https://i.ytimg.com/vi/jZCve9R-gRg/maxresdefault.jpg" alt=""></a>
        </center>
        <br>
        <center>
            <a style="color: white;" href="booking.php?sign=<?php echo "106"; ?>"><button>Morning Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "107"; ?>"><button>Afternoon Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "108"; ?>"><button>Evevning Slot</a>
        </center>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Date :- 14/07/2021</h1>
        </center>
        <center>
            <a href="https://www.youtube.com/watch?v=syUHB8U88ig" target="_blank">
                <img src="https://i.ytimg.com/vi/syUHB8U88ig/maxresdefault.jpg" alt=""></a>
        </center>
        <br>
        <center>
            <a style="color: white;" href="booking.php?sign=<?php echo "109"; ?>"><button>Morning Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "110"; ?>"><button>Afternoon Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "111"; ?>"><button>Evevning Slot</a>
        </center>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Date :- 15/07/2021</h1>
        </center>
        <center>
            <a href="https://www.youtube.com/watch?v=IMGXoOrEQH4" target="_blank">
                <img src="https://i.ytimg.com/vi/MIvJ-quCxiE/maxresdefault.jpg" alt=""></a>
        </center>
        <br>
        <center>
            <a style="color: white;" href="booking.php?sign=<?php echo "112"; ?>"><button>Morning Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "113"; ?>"><button>Afternoon Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "114"; ?>"><button>Evevning Slot</a>
        </center>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Date :- 16/07/2021</h1>
        </center>
        <center>
            <a href="https://www.youtube.com/watch?v=GTGcqDZY6Lw" target="_blank">
                <img src="https://i.ytimg.com/vi/vC4CX4CqX9c/maxresdefault.jpg" alt=""></a>
        </center>
        <br>
        <center>
            <a style="color: white;" href="booking.php?sign=<?php echo "115"; ?>"><button>Morning Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "116"; ?>"><button>Afternoon Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "117"; ?>"><button>Evevning Slot</a>
        </center>
    </div>
    <br><br><br>
    <div class="movie1">
        <center>
            <h1>Date :- 17/07/2021</h1>
        </center>
        <center>
            <a href="https://www.youtube.com/watch?v=RNWczj36RSg" target="_blank">
                <img src="https://i.ytimg.com/vi/w7qsom41_L8/maxresdefault.jpg" alt=""></a>
        </center>
        <br>
        <center>
            <a style="color: white;" href="booking.php?sign=<?php echo "118"; ?>"><button>Morning Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "119"; ?>"><button>Afternoon Slot</a>
            <a style="color: white;" href="booking.php?sign=<?php echo "120"; ?>"><button>Evevning Slot</a>
        </center>
    </div>
    <br>
    <br>
    <br>
    <?php
    include('footer.php');
    ?>
</body>

</html>