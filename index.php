<?php
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Movie Ticket Booking</title>
    <style>
        body {
            /* background-image: -webkit-radial-gradient(lightblue,white); */
            background: url('http://freepikpsd.com/media/2017/05/01-2-2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .movieButton {
            /* border: 2px solid blue; */
            margin: 20px;
            padding: 50px;
        }

        .movieButton button {
            display: inlineblock;
            width: 200px;
            height: 50px;
            border-radius: 20px;
            border: 2px groove white;
            /* background-color: blue; */
            background: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ8NDQ0NFREWFhURExUYHSggGBolGxUVITEhMSkrOi4uFx8zODMtNygtLisBCgoKDQ0NDw0NDysZFRkrKy03LTcrKys3Nzc3NzctLS0rLTcrKy0rNzcrLS0tLSstKysrKysrKysrKysrKysrLf/AABEIALcBEwMBIgACEQEDEQH/xAAaAAEBAQEBAQEAAAAAAAAAAAABAgADBAUG/8QAFxABAQEBAAAAAAAAAAAAAAAAABEBEv/EABoBAQEBAQADAAAAAAAAAAAAAAABAgMEBQb/xAAVEQEBAAAAAAAAAAAAAAAAAAAAEf/aAAwDAQACEQMRAD8A/UYqoxWPWPpV4cRihF4cThGVMCqHNVicbBFKRihFMMKskhhCwIMzMoWDIFg1ELBgVWTWoKrVNagqsmtQXWqKaEVWRWUj5mHEZqs1zeUvNViM1WCLOIzTios4iqwRRSRDisSaqKpThzRlTDCIWBBmZlRmZkGYMBYNRSwrUIWTWqEUya1Uiq1TWpSKZFYI+bisRisZeQvNOIxWaC8Kc04qLw1GapEVhThqoopIisKTiopSMVgyWBEZmYGYMK1YVqga1S1CFqKBYqiiihFVqmtQVRU1qiw0orA+fmqxGarNHZdOajNOaI6YqueKwReHNTmkReac1GGiLKc0qKOJODK8KSqKZJELUDdQhDUCwisBSKK1A0BkDWqa1FNaprUFUUUUDWTWB4MVjnmqo6rzVY51WaDpmqxzzVZoi804nCIvDmoOCOmHNRmqzRFUpOKi8KcIhKawFhWBmoooGsKKimtRooGitRQO6KKN0DWqa1FVRU0VBVZLKPDhqM1WDovNOajNVmgvNVmuearNEdM1Vc81VEXhzUKoKzVZqM1WaIunEZpzRldNRmmqKpqKwKrJaoFhRQNFFFBVFFFFNbdTWoGiprUDWqaKiq3RRuihFBNYWPFmqzXPFZqtOmaUYQdM05qM1WaIvFVzzVZoLzVZrnmqzRF1WOdVRF5qq55pojpmsimguiiigqtU1qCqN1NagaKKKCqKmtRTRRRUDWqaKKqiprUDRRuiiqrIYHkxWOearNaaXmqxGac1EXmqrnmqzQdM01FNEXVVzzVZoLzVVzzVZoi80opoi6aitQXWqa1BVaorUFUUUVBVFFFA1qmiiqooqaCqKndFFiqKKKBapagayayjyZqs1zzVZqtOmarNc6rNQUrNRmnBHTNOainNBeac1GaqiLpzUZrUHSnNc81VEXTXOmgutU1qgqtUVqCq1TRQVWqaKCqKmtRTRuiigaKN0VVVRRRQVRQwNWDIPHmqzXPFZrSumaqueaqgunNRmnNB0zTUZpqIvNNRTmg6ZrVFNEXTUU0F01FagutUVqCq1RWoLoqa1BVFFFBVFTWoprVNagaBWoFk1qCt0BgIYA8WarNRmnNaV0zTmopzUHSnNRmmg6U5rnTQdKa501EdKa55poOlbNRTQXWqKaIqtU1qKqtUVqC61RWoKrVNFBVFFFBTVNaga1FFBVFFYCwIFgRHzs1VDNNKzVVmA05pZBs01mA09MwHNOazCGmsyDU1mBq1ZgatWYBWrMKK1ZgatWYGrVmUaiswjVqzA1NZgNZmQf/Z');
            color: black;
            margin: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        .movieButton button:hover {
            /* background-image: linear-gradient(rgb(127, 196, 219), rgb(224, 141, 193)); */
            background: url('https://i.pinimg.com/originals/94/ba/53/94ba53dc8a376c9727742a4fd56cf509.gif');
            color: white;
            border: 2px solid blue;
            transform: scale(1.1);
        }

        .moviepic {
            /* border: 2px solid red; */
            padding: 10px;
            position: relative;
        }

        .moviepic marquee img {
            position: relative;
            width: 100px;
            height: 100px;
            margin-left: 10px;
            border-radius: 5px;
        }

        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        .slideshow-container img {
            width: 50%;
            height: 370px;
            /* border-radius: 20px; */
            outline: 10px groove blue;
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            background-color: black;
            color: #f2f2f2;
            font-size: 15px;
            font-weight: bold;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }

        h3 {
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

    <br><br><br><br>
    <center>
        <div class="movieButton">
            <center>
                <a href="Holleywood.php"><button>Hollywood Movie</button></a>
                <a href="bollywood.php"><button>Bollywood Movie</button></a>
                <a href="South.php"><button>South Movie</button></a>
                <a href="Gujrati.php"><button>Gujarati Movie</button></a>
                <a href="coming_soon.php"><button>Coming Soon...</button></a>
            </center>
        </div>
    </center>
    <br>

    <!-- ======================================================================= -->
    <center>
        <h3>Hits Movies !!</h3>
    </center>
    <br><br>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 8</div>
            <a href="https://www.youtube.com/watch?v=zPl7y5yBzuo" target="_blank">
                <img src="https://www.filmibeat.com/ph-big/2019/10/radhe_157140421800.jpg" style="width:100%"></a>
            <div class="text">Radhe</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 8</div>
            <a href="https://www.youtube.com/watch?v=YTGO38DSIsc" target="_blank">
                <img src="https://wallpapercave.com/wp/wp9059434.jpg" style="width:100%"></a>
            <div class="text">Mumbai Saga</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 8</div>
            <a href="https://www.youtube.com/watch?v=jCFWEzIVILc" target="_blank" rel="noopener noreferrer"><img src="https://i.ytimg.com/vi/hz_yJyrCpjw/maxresdefault.jpg" style="width:100%"></a>
            <div class="text">Underwater</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 8</div>
            <a href="https://youtu.be/AZGcmvrTX9M" target="_blank" rel="noopener noreferrer"><img src="https://i.zoomtventertainment.com/story/Tenet_Movie_Review.jpg" style="width:100%"></a>
            <div class="text">Tenet</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 8</div>
            <a href="https://www.youtube.com/watch?v=8A9mJYprMl4" target="_blank" rel="noopener noreferrer"><img src="https://moviegalleri.net/wp-content/gallery/bheeshma-movie-hd-wallpapers/bheeshma-movie-hd-wallpapers-nitin-rashmika-mandanna-474e7ca.jpg" style="width:100%"></a>
            <div class="text">Bheeshma</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6 / 8</div>
            <a href="https://www.youtube.com/watch?v=q_XYrHrC7uc" target="_blank" rel="noopener noreferrer"><img src="https://i.ytimg.com/vi/yjR6kc7ZSkg/sddefault.jpg#404_is_fine" style="width:100%"></a>
            <div class="text">Red</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">7 / 8</div>
            <a href="https://www.youtube.com/watch?v=xDdyj716gfM&t=1s" target="_blank" rel="noopener noreferrer"><img src="https://i.ytimg.com/vi/mNpG1td2lkM/maxresdefault.jpg" style="width:100%"></a>
            <div class="text">Rado</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">8 / 8</div>
            <a href="https://www.youtube.com/watch?v=qb8uOylK3R4" target="_blank" rel="noopener noreferrer"><img src="https://i.ytimg.com/vi/qb8uOylK3R4/maxresdefault.jpg" style="width:100%"></a>
            <div class="text">Hellaro</div>
        </div>


        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>

    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

</body>

</html>
<?php
include('footer.php');
?>