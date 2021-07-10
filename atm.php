<?php

session_start();
include('config.php');

$user_id = $_SESSION['user'];

if ($_POST["porson"]) {
    $porson = $_POST["porson"];
    $_SESSION['porson'] = $porson;
} else {
    echo '<script>
        alert("You not enter your ticket, please enter your ticket");
        location.replace("index.php");
        </script>';
}

$m_sno = $_SESSION["m_sno"];
$actual_price = $_SESSION['actual_price'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
        input[type="submit"] {
            background-color: blue;
            color: white;
            font-size: x-large;
            border-radius: 12px;
            padding: 5px 0px;
        }

        input[type="submit"]:hover {
            background-image: radial-gradient(rgba(99, 101, 247), rgba(12, 13, 12));
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: azure;
        }

        .container {
            width: 750px;
            height: 500px;
            border: 1px solid;
            background-color: white;
            display: flex;
            flex-direction: column;
            padding: 40px;
            justify-content: space-around;
        }

        .container h1 {
            text-align: center;
        }

        .first-row {
            display: flex;
        }

        .owner {
            width: 100%;
            margin-right: 40px;
        }

        .input-field {
            border: 1px solid #999;
        }

        .input-field input {
            width: 100%;
            border: none;
            outline: none;
            padding: 10px;
        }

        .selection {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .selection select {
            padding: 10px 20px;
        }

        a {
            background-color: blueviolet;
            color: white;
            text-align: center;
            text-transform: uppercase;
            text-decoration: none;
            padding: 10px;
            font-size: 18px;
            transition: 0.5s;
        }

        a:hover {
            background-color: dodgerblue;
        }

        .cards img {
            width: 100px;
        }
    </style>
</head>

<body>

    <form action="OTP.php" method="POST">
        <div class="container">
            <h1>Your payment is <?php echo $porson * $actual_price; ?> ₹</h1>
            <h1>Confirm Your Payment</h1>
            <div class="first-row">
                <div class="owner">
                    <h3>Owner</h3>
                    <div class="input-field">
                        <input type="text" name="o_name" required pattern="[A-Z]{5,25}" title="Username should be started with uppercase letters.">
                    </div>
                </div>
                <div class="cvv">
                    <h3>CVV</h3>
                    <div class="input-field">
                        <input type="password" name="cvv" required pattern="[0-9]{3}" title="Enter three digit CVV code">
                    </div>
                </div>
            </div>
            <div class="second-row">
                <div class="card-number">
                    <h3>Card Number</h3>
                    <div class="input-field">
                        <input type="text" name="number" required pattern="[0-9]{16}" title="Enter sixteen digit debit or credit card number">
                    </div>
                </div>
            </div>
            <div class="third-row">
                <h3>Expiration Date</h3>
                <div class="selection">
                    <div class="date">
                        <select name="months" id="months" required>
                            <option value="" selected disabled>Month</option>
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                        </select>
                        <select name="years" id="years" required>
                            <option value="" selected disabled>Year</option>
                            <option value="2020">2026</option>
                            <option value="2019">2025</option>
                            <option value="2018">2024</option>
                            <option value="2017">2023</option>
                            <option value="2016">2022</option>
                            <option value="2015">2021</option>
                        </select>
                    </div>
                    <div class="cards">
                        <img src="image/atm_pic/mc.png" alt="☻">
                        <img src="image/atm_pic/vi.png" alt="☻">
                        <img src="image/atm_pic/pp.png" alt="☻">
                    </div>
                </div>
            </div>
            <input type="submit" value="Confirm" name="done">
        </div>
    </form>
</body>

</html>