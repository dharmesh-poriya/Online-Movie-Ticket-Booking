
<?php
include('config.php');
session_start();
if (isset($_POST['upload'])) {
    $change_profile_in_this_id = $_SESSION['user'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "C:/xampp/htdocs/dporiya/PHP_Project/My_New_Website/image/profile_pic/" . $filename;
    $update = "UPDATE `tbl_registration` SET `filename` = '$filename' WHERE `user_id` = '$change_profile_in_this_id';";
    $result = mysqli_query($con, $update);

    if ($result) {
        if (move_uploaded_file($tempname, $folder)) {
            echo " <script>
                alert('Profile pic upload successfully!!');
                location.replace('profile.php');
                </script>";
        } else {
            echo " <script>
                alert('Profile pic not uploaded!! Try again');
                location.replace('profile.php');
                </script>";
        }
    } else {
        echo " <script>
                alert('Data not found');
                location.replace('profile.php');
                </script>";
    }
}
?>