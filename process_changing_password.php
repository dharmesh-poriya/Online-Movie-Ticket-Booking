<?php
include('config.php');
session_start();

if (isset($_POST['passSubmit'])) {
    $password = $_POST['currentPassword'];
    $newpass = $_POST['newPassword'];
    $cnewpass = $_POST['cnewPassword'];
    $change_in_this_id = $_SESSION['user'];
    if (!strcmp($password, $cnewpass)) {
        echo " <script>
            alert('Your new password should be differ from old password.');
            location.replace('change_password.php');
        </script>";
    } else {
        $sql = "SELECT * FROM `tbl_registration` WHERE (`user_id`='$change_in_this_id' AND `password`='$password');";
        $login_result = mysqli_query($con, $sql);
        if (!$login_result) {
            echo " <script>
            alert('Something went Wrong!! Server Down!! Try later!!');
            location.replace('index.php');
        </script>";
        } else {
            $usr = mysqli_fetch_assoc($login_result);
            if (!$usr) {
                echo " <script>
            alert('Your entered current password was wrong.');
            location.replace('change_password.php');
        </script>";
            } else {
                $update = "UPDATE `tbl_registration` SET `password` = '$newpass' WHERE `tbl_registration`.`user_id` = '$change_in_this_id';";
                $result = mysqli_query($con, $update);
                if ($update && $result) {
                    $to = $usr['email'];
                    $subject = "Password Updated Successfully!!";

                    $message = "<h2>Your password have been updated successfully.</h2><h3>Thank You!!</h3>";
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: <webmaster@example.com>' . "\r\n";
                    if (mail($to, $subject, $message, $headers)) {
                        echo " <script>
            alert('Your password has been updated successfully!!');
            location.replace('profile.php');
            </script>";
                    } else {
                        echo " <script>
                alert('Something went wrong');
                location.replace('index.php');
                </script>";
                    }
                } else {
                    echo " <script>
            alert('Your data not found');
            location.replace('profile.php');
            </script>";
                }
            }
        }
    }
}
