<?php
session_start();
include('config.php');
$user_id = $_SESSION['user'];
$db_sno = $_SESSION['db_sno'];
$time_of_movie = $_SESSION['time'];
$m_sno = $_SESSION['m_sno'];
$price_of_movie = $_SESSION['actual_price'];
$booked_seat = $_SESSION['porson'];
$slot = $_SESSION['slot'];

$sql1 = "SELECT * FROM `all_movie` WHERE `m_sno` LIKE '$db_sno'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$name_of_cinema = "CINEPLEX";
$movie_name = $row1['m_name'];
$date_of_movie = $row1['date'];

$sql2 = "SELECT * FROM `tbl_registration` WHERE (`user_id`='$user_id');";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$user_name = $row2['name'];
$emailId = $row2['email'];

$place = "Dumas Road, Surat - 395007, Opposite Iskon Mall";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket</title>
    <style>
        .ticket {
            width: 800px;
            height: auto;
            margin: auto;
            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaeetkG6RY5nK9b9kW6aHWLCy_h6t_chu3mA&usqp=CAU');
            background-repeat: no-repeat;
            border: 2px solid blue;
            background-size: cover;
            /* border-radius: 15px; */
            opacity: 0.80;
            outline: 20px solid pink;
            outline-style: groove;
        }

        .ticket .top {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            width: 100%;
            height: auto;
        }

        .ticket .top>div {
            height: 100px;
        }

        .ticket .top .date {
            display: inline;
            width: 100%;
            height: auto;
        }

        .ticket .name {
            width: 100%;
            height: auto;
            /* border: 1px solid green; */
        }

        .ticket .top .time {
            float: right;
            width: 100%;
            height: auto;
            /* border: 1px solid yellow; */
        }

        .ticket .detail {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            width: 100%;
            height: auto;
            /* border: 1px solid gray; */
        }

        .ticket .detail>div {
            height: auto;
        }

        .ticket .uname {
            width: 100%;
            height: auto;
        }

        .ticket .mail {
            width: 100%;
            height: auto;
            /* border: 1px solid green; */
        }

        .ticket .idno {
            width: 100%;
            height: auto;
            /* border: 1px solid green; */
        }

        .ticket .mname {
            width: 100%;
            height: auto;
            /* border: 1px solid green; */
        }

        .ticket .bookedseat {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            width: 100%;
            height: auto;
            /* border: 1px solid gray; */
        }

        .ticket .bookedseat>div {
            /* width: 100px; */
            height: auto;
            /* border: 2px dashed red; */
        }

        .ticket .book {
            width: 100%;
            height: auto;
            /* border: 1px solid green; */
        }

        .ticket .price {
            width: 100%;
            height: auto;
            /* border: 1px solid red; */
        }

        .ticket .slotp {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-between;
            width: 100%;
            height: auto;
            /* border: 1px solid gray; */
        }

        .ticket .slotp>div {
            /* width: 100px; */
            height: auto;
            /* border: 2px dashed red; */
        }

        .ticket .slotp .slot {
            width: 100%;
            height: auto;
            /* border: 1px solid red; */
        }

        .ticket .slotp .tprice {
            width: 100%;
            height: auto;
            /* border: 1px solid red; */
        }

        .ticket .place {
            width: 100%;
            height: auto;
            /* border: 1px solid yellow; */
        }

        hr {
            border-top: 2px dashed red;
        }

        input[type="button"] {
            width: 160px;
            padding: 10px;
            background-color: blue;
            border-radius: 10px;
            color: white;
            font-size: large;
            font-weight: bold;
        }

        input[type="button"]:hover {
            background-image: radial-gradient(rgba(221, 223, 237), rgba(129, 148, 240));
            color: black;
            font-weight: bolder;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <br><br><br><br><br><br><br>
    <div class="ticket">
        <div class="name">
            <h1>
                <center><?php echo $name_of_cinema; ?></center>
            </h1>
        </div>
        <div class="top">
            <div class="date">
                <center>
                    <font color="black" face="verdana"><big><b>Date :- </b></big><?php echo $date_of_movie; ?></font>
                </center>
            </div>
            <div class="time">
                <center>
                    <font color="black" face="verdana"><big><b>Time :- </b></big><?php echo $time_of_movie; ?> </font>
                </center>
            </div>
        </div>
        <br>
        <div class="detail">
            <div class="uname">
                <center>
                    <font color="black" face="verdana"><b>User Name :- </b><?php echo $user_name; ?></font>
                </center>
            </div>
            <div class="mail">
                <center>
                    <font color="black" face="verdana"><b>Email :- </b><?php echo $emailId; ?></font>
                </center>
            </div>
            <div class="idno">
                <center>
                    <font color="black" face="verdana"><b>User ID :- </b><?php echo $user_id; ?></font>
                </center>
            </div>
        </div>
        <hr>
        <div class="mname">
            <center>
                <font color="black" face="verdana" size="6px"><?php echo $movie_name; ?></font>
            </center>
        </div>
        <br>
        <div class="bookedseat">
            <div class="book">
                <center>
                    <font color="black" face="verdana"><big><b>Total Booked Seat :- </b></big><?php echo $booked_seat; ?></font>
                </center>
            </div>
            <div class="price">
                <center>
                    <font color="black" face="verdana"><big><b>Price per Person :- </b></big><?php echo $price_of_movie; ?></font>
                </center>
            </div>
        </div>
        <br>
        <div class="slotp">
            <div class="tprice">
                <center>
                    <font color="black" face="verdana"><big><b>Total Payment :- </b></big><?php echo $booked_seat . " * " . $price_of_movie . " = " . $booked_seat * $price_of_movie; ?></font>
                </center>
            </div>
            <div class="slot">
                <center>
                    <font color="black" face="verdana"><big><b>Taken Slot :- </b></big><?php echo $slot; ?></font>
                </center>
            </div>
        </div>
        <br>
        <div class="place">
            <center>
                <font color="black" face="verdana"><big><b>Place :- </b></big><?php echo $place; ?></font>
            </center>
        </div>
        <br>
    </div>
    <br><br><br>

    <center><input type="button" value="Download Ticket" onclick="myFunctionPrint()"></center>
</body>
<script>
    function myFunctionPrint() {
        var r = confirm("Don't forgot to print this ticket !!");
        if (r == true) {
            window.print();
            window.location.href = "index.php";
        } else {
            window.location.href = "ticket.php";
        }
    }
</script>
</body>

</html>