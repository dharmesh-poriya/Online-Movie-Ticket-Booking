<?php
$server = "localhost";
$user = "root";
$password = "";
$db_name = "movieticket";

$con = mysqli_connect($server, $user, $password, $db_name);

if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
