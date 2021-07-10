<?php
include('navbar.php');

include('config.php');
$m_sno = $_GET["sign"];

if ($_SESSION['user'])
    $user_id = $_SESSION['user'];
else {
    echo '<script>
        alert("You are not login our side, please login our side");
        location.replace("login.php");
        </script>';
}

if ($m_sno >= 1 && $m_sno <= 30) {
    $movie_type = "bolleywood";
    $_SESSION['movie_type'] = $movie_type;
} else if ($m_sno >= 31 && $m_sno <= 60) {
    $movie_type = "holleywood";
    $_SESSION['movie_type'] = $movie_type;
} else if ($m_sno >= 61 && $m_sno <= 90) {
    $movie_type = "south";
    $_SESSION['movie_type'] = $movie_type;
} else {
    $movie_type = "gujrati";
    $_SESSION['movie_type'] = $movie_type;
}

$_SESSION["m_sno"] = $_GET["sign"];
if ($m_sno % 3 == 0) {
    $db_sno = (int)($m_sno / 3);
    $_SESSION['db_sno'] = $db_sno;
} else {
    $db_sno = (int)($m_sno / 3) + 1;
    $_SESSION['db_sno'] = $db_sno;
}

$sql1 = "SELECT * FROM `all_movie` WHERE `m_sno` LIKE '$db_sno'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_assoc($result1);

$m_name = $row1['m_name'];
$price = $row1['price'];
$date = $row1['date'];
$link = $row1['link'];

$m_price = $price - ($price * 20 / 100) - (10 - ($price * 20 / 100) % 10);
$a_price = $price - ($price * 10 / 100) - (10 - ($price * 10 / 100) % 10);

if ($m_sno % 3 == 1) {
    $actual_price = $price - ($price * 20 / 100) - (10 - ($price * 20 / 100) % 10);
    $_SESSION['time'] = "9:00 AM";
    $_SESSION['slot'] = "Morning";
} else if ($m_sno % 3 == 2) {
    $actual_price = $price - ($price * 10 / 100) - (10 - ($price * 10 / 100) % 10);
    $_SESSION['time'] = "3:00 PM";
    $_SESSION['slot'] = "Afternoon";
} else {
    $actual_price = $price;
    $_SESSION['time'] = "9:00 PM";
    $_SESSION['slot'] = "Evening";
}

$sql2 = "SELECT * FROM `membersheep` WHERE `user_id` LIKE '$user_id'";
$result2 = mysqli_query($con, $sql2);
if (mysqli_fetch_assoc($result2)) {
    $member_price = ($actual_price * 80 / 100) - (10 - ($actual_price * 20 / 100) % 10);
    $print = "You are a member,So your price is $member_price ₹";
    $_SESSION['actual_price'] = $member_price;
    $_SESSION['is_member'] = 1;
} else {
    $print = "You are not member,So your price is $actual_price ₹";
    $_SESSION['actual_price'] = $actual_price;
    $is_member['is_member'] = 0;
}

$sql3 = "SELECT * FROM `$movie_type` WHERE `m_sno` LIKE '$m_sno'";
$result3 = mysqli_query($con, $sql3);

$num3 = 0;
if (mysqli_num_rows($result3))
    while ($row3 = mysqli_fetch_assoc($result3))
        $num3 += $row3['total_member'];
if (150 - $num3 <= 0) {
    echo '<script>
        alert("Sorry , This sloat is Full");
        location.replace("bolleywood_movie.php");
    </script>';
}

$sql4 = "SELECT * FROM `membersheep` WHERE `user_id` LIKE '$user_id'";
$result4 = mysqli_query($con, $sql4);
$row4 = mysqli_fetch_assoc($result4);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Ticket</title>

    <style>
        body {
            background: url('https://media.istockphoto.com/vectors/blurred-bokeh-light-on-dark-blue-background-christmas-and-new-year-vector-id1128429212?k=6&m=1128429212&s=612x612&w=0&h=zsxETUMDJMNj2O4uuP_umSJH5GKa36J0grGGwlGThsI=');
            background-repeat: no-repeat;
            background-size: cover;

        }

        .booking {
            width: 95%;
            height: auto;
            padding: 10px;
            margin-left: auto;
            margin-right: auto;
            background: url('https://media.istockphoto.com/photos/dark-wood-background-picture-id933501774?k=6&m=933501774&s=612x612&w=0&h=nP_45Mtx2FQrA9QH1hpejUQ8KYu09MBCJBhdmHvwf-o=');
        }

        .booking #title {
            width: 92%;
            height: auto;
            padding: 5px;
            margin-bottom: 15px;
            margin-left: auto;
            margin-right: auto;
            /* border: 2px solid red; */
        }

        .booking #movieName {
            width: 92%;
            height: auto;
            padding: 2px;
            margin-bottom: 15px;
            margin-left: auto;
            margin-right: auto;
            /* border: 2px solid green; */
        }

        .booking #date {
            width: 92%;
            height: auto;
            padding: 10px;
            margin-bottom: 15px;
            margin-left: auto;
            margin-right: auto;
            /* border: 2px solid black; */
        }

        .booking .is {
            display: flex;
            direction: ltr;
            width: 92%;
            height: auto;
            padding: 10px;
            margin-bottom: 15px;
            margin-left: auto;
            margin-right: auto;
            /* border: 2px solid orange; */
        }

        .booking .is .mimage {
            flex: 1;
            width: 50%;
            height: auto;
            padding: 5px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 2px;
            /* border: 2px solid blue; */
        }

        .booking .is .mimage img {
            display: wrap;
            width: 98%;
            margin: auto;
            height: auto;
            border: 2px solid blue;
            border-radius: 10px;
        }


        .booking #price {
            width: 92%;
            height: auto;
            padding: 10px;
            margin-bottom: 15px;
            margin-left: auto;
            margin-right: auto;
            /* border: 2px solid greenyellow; */
        }

        .booking #how {
            width: 92%;
            height: auto;
            padding: 10px;
            margin-bottom: 15px;
            margin-left: auto;
            margin-right: auto;
            /* border: 2px solid pink; */
        }

        .booking .is .mimage table {
            width: 100%;
            font-size: x-large;
            font-weight: bolder;
        }

        td {
            padding-left: 10px;
            border: 2px groove lightcoral;
            border-radius: 20px;
        }

        td:nth-child(odd) {
            background-image: radial-gradient(rgba(224, 230, 124), rgba(136, 169, 235));
        }

        td:nth-child(even) {
            background-image: radial-gradient(rgba(237, 180, 126), rgba(162, 149, 222));
        }

        .booking .is .mimage h2 {
            margin-left: auto;
            margin-right: auto;
            display: inline-block;
            color: white;
            font-size: xx-large;
            background: url('https://cliply.co/wp-content/uploads/2019/08/371908020_CONFETTI_400px.gif');
            color: black;
            cursor: pointer;
            border-radius: 15px;
            padding: 0px 25px;
        }

        .booking .is .mimage .table h2 {
            margin-left: auto;
            margin-right: auto;
            display: inline-block;
            color: white;
            font-size: x-large;
            background: url('https://j.gifs.com/KROqoX.gif');
            color: white;
            font-weight: bold;
            border-radius: 15px;
            padding: 0px 25px;
            margin-bottom: 25px;
        }

        .booking .is .mimage h3 {
            margin-left: auto;
            margin-right: auto;
            display: inline-block;
            color: white;
            font-size: large;
            background: url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v462-n-130-textureidea_1.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=9465282a2b0a375f4f5b120d7bbad882');
            color: white;
            border-radius: 15px;
            padding: 0px 25px;
            margin-top: 20px;
        }

        #b1 {
            width: 150px;
            padding: 5px;
            margin-right: 0px;
            margin-left: 10px;
            margin-bottom: 15px;
            font-size: large;
            border-radius: 15px;
            border: 2px groove blue;
            background: url('https://i.pinimg.com/originals/94/ba/53/94ba53dc8a376c9727742a4fd56cf509.gif');
            color: white;
            font-weight: bold;
        }

        #b1:hover {
            background: url('https://cliply.co/wp-content/uploads/2019/08/371908020_CONFETTI_400px.gif');
            color: black;
            cursor: pointer;
            font-weight: bolder;
        }

        select {
            border: 2px solid blue;
            border-radius: 10px;
            background: url('https://cliply.co/wp-content/uploads/2019/08/371908020_CONFETTI_400px.gif');
            padding: 5px;
            font-size: large;
            font-weight: bold;
            color: black;
        }

        select::after {
            color: black;
            background-color: blue;
        }

        .select-box .options-container {
            background: blue;
        }

        @media (max-width:600px) {
            .booking .is {
                display: block;
            }

            .booking .is .mimage {
                display: block;
                width: 98%;
                margin-left: auto;
                margin-right: auto;
            }

            .booking .is .mimage img {
                width: 98%;
                margin: 0px;
                height: auto;
                border: 2px solid blue;
            }

            select {
                margin-bottom: 20px;
            }

            #b1 {
                width: 250px;
            }
        }

        #title h1 {
            margin-left: auto;
            margin-right: auto;
            display: inline-block;
            font-size: xx-large;
            background: url('https://thumbs.gfycat.com/AbleDefensiveAfricangroundhornbill-max-1mb.gif');
            color: black;
            border: 2px solid blue;
            border-radius: 15px;
            padding: 0px 25px;
            margin-bottom: 25px;
            font-weight: bold;
        }

        p {
            background: url('https://thumbs.gfycat.com/AbleDefensiveAfricangroundhornbill-max-1mb.gif');
            font-size: x-large;
            color: black;
            font-weight: bold;
            margin-top: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <br><br><br><br>
    <div class="booking">
        <div id="title">
            <center>
                <h1>Book Your Favourite Movie</h1>
            </center>
        </div>
        <div class="is">

            <div class="mimage">
                <center>
                    <img src="<?php echo $link; ?>" alt="Parmanu">
                    <h2><?php echo $m_name; ?></h2><br>
                    <h3>Date :- <?php echo $date; ?></h3>
                </center>
            </div>

            <div class="mimage">
                <div class="table">
                    <center>
                        <h2>Ticket Details:-</h2>
                    </center>
                    <table align="center">
                        <tr>
                            <td>Booked Seat</td>
                            <td><?php echo $num3; ?></td>
                        </tr>
                        <tr>
                            <td>Remaining Seat</td>
                            <td><?php echo 150 - $num3; ?></td>
                        </tr>
                        <tr>
                            <td>Total Seat</td>
                            <td><?php echo "150"; ?></td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="table">
                    <center>
                        <h2>Slotwise Price:-</h2>
                    </center>
                    <table align="center">
                        <tr>
                            <td>Morning Slot (9:00 to 12:00 AM)</td>
                            <td><?php echo $m_price; ?></td>
                        </tr>
                        <tr>
                            <td>Afternoon Slot (3:00 to 6:00 PM)</td>
                            <td><?php echo $a_price; ?></td>
                        </tr>
                        <tr>
                            <td>Night Slot (9:00 to 12:00 PM)</td>
                            <td><?php echo $price; ?></td>
                        </tr>
                    </table>
                    <center>
                        <p><?php echo $print; ?></p>
                    </center>
                </div>
            </div>

        </div>
        <div id="how">
            <form action="atm.php" method="POST">
                <center>
                    <select name="porson" id="Porson" required>
                        <option value="" selected disabled>How many ticket you want?</option>
                        <?php
                        for ($i = 1; $i <= 150 - $num3; $i++) {
                            echo "<option value= " . $i . ">" . $i . "</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" value="Booking Now" name="submit" id="b1">
                </center>
            </form>
        </div>
    </div>
</body>

</html>