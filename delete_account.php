<?php

include('config.php');
session_start();
$delete_this_account = $_SESSION['user'];
$delete_acc = "DELETE FROM `tbl_registration` WHERE `tbl_registration`.`user_id` = '$delete_this_account';";
$result = mysqli_query($con, $delete_acc);
if($delete_acc && $result){
    session_destroy();
    header('location:index.php');
}else{
    echo " <script>
            alert('Something went wrong!! Try again!!');
            location.replace('profile.php');
            </script>";
}
