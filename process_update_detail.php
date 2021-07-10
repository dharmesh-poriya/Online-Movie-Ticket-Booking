
<?php

include('config.php');
session_start();
$change_uname = $_POST['name'];
$change_email = $_POST['email'];
$change_phone = $_POST['phone'];
$change_city = $_POST['city'];
$change_in_this_id = $_SESSION['user'];

$update = "UPDATE `tbl_registration` SET `name` = '$change_uname', `email` = '$change_email', `phone` = '$change_phone', `city` = '$change_city' WHERE `tbl_registration`.`user_id` = '$change_in_this_id';";
$result = mysqli_query($con, $update);
if ($update && $result) {
    echo " <script>
            alert('Your data has been updated successfully!!');
            location.replace('profile.php');
            </script>";
} else {
    echo " <script>
            alert('your entered email address has been already exist!! Try with another email address');
            location.replace('update.php');
            </script>";
}

?>