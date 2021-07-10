<?php
include('navbar.php');
$user_id = $_SESSION['user'];
$sql = "SELECT * FROM `tbl_registration` WHERE `user_id`='$user_id';";
$view_profile = mysqli_query($con, $sql);
if (!$view_profile) {
    echo " <script>
                    alert('Sorry...Something went wrong !! Try to watch your profile Later...');
                    location.replace('index.php');
                </script>";
} else {
    $row = mysqli_fetch_assoc($view_profile);
    if (!$row) {
        echo " <script>
                    alert('Data not found!!');
                    location.replace('index.php');
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            background: url('https://image.freepik.com/free-vector/show-dance-floor-vector-background-with-spotlights-party-concert-stage-floor-illustration_1284-42341.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .profile {
            display: flex;
            direction: ltr;
            width: 1000px;
            height: auto;
            margin-bottom: 15px;
            margin-left: auto;
            margin-right: auto;
            /* margin: auto; */
            padding-top: 15px;
            padding-bottom: 15px;
            border-radius: 15px;
            background: url('https://i.pinimg.com/originals/3d/08/e0/3d08e03cb40252526fee2036a67f07f1.gif');
            border: 2px solid red;
        }


        .profile .protable table {
            margin: auto;
            padding: 5px;
            width: auto;
            border: 2px solid red;
            border-radius: 15px;
            border-spacing: 20px;
            background: url('https://i.pinimg.com/originals/3d/08/e0/3d08e03cb40252526fee2036a67f07f1.gif');
        }

        .protable {
            /* border: 2px solid yellow; */
            padding: 10px;
        }

        /* -------------------- */
        .profile .protable {
            flex: 1;
            width: 50%;
            height: auto;
            padding: 5px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 2px;
            /* border: 2px solid blue; */
        }

        .ptable {
            /* border: 2px solid white; */
            margin-top: 15px;

        }

        /* ============================ */
        .protable img {
            width: 420px;
            height: 400px;
            margin: auto;
            margin-top: 50px;
            border-radius: 30px;
        }

        td {
            display: flex;
            width: auto;
            border: 2px solid black;
            border-radius: 15px;
            padding: 5px 10px;
            text-align: center;
        }

        td:nth-child(odd) {
            background-image: radial-gradient(rgba(224, 230, 124), rgba(136, 169, 235));
        }

        td:nth-child(even) {
            background-image: radial-gradient(rgba(237, 180, 126), rgba(162, 149, 222));
        }

        table caption {
            text-align: center;
            margin-bottom: 15px;
            font-size: x-large;
            border-radius: 15px;
            background-image: radial-gradient(rgba(237, 180, 126), rgba(162, 149, 222));
        }

        #b1:hover,
        #b2:hover {
            background: url('https://thumbs.gfycat.com/FittingWiltedDamselfly-size_restricted.gif');
            font-weight: bolder;
            cursor: pointer;
            transform: scale(1.05);
            margin-left: 10px;
            margin-right: 10px;
        }

        .center {
            display: flex;
            margin: auto;
            justify-content: center;
            align-items: center;
        }

        .changebtn {
            margin: auto;
            /* border: 2px solid green; */
        }

        @media (min-width:400px) AND (max-width:600px) {
            .profile {
                display: block;
                width: 96%;
            }

            .profile .protable {
                display: block;
                width: 96%;
                margin-left: auto;
                margin-right: auto;
            }

            .profile .protable img {
                /* width: 80%; */
                width: 350px;
                margin: auto;
                height: auto;
                border: 2px solid blue;
                border-radius: 70px;
            }
        }

        @media(max-width:400px) {
            .profile {
                display: block;
                width: 96%;
            }

            .profile .protable {
                display: block;
                width: 96%;
                margin-left: auto;
                margin-right: auto;
            }

            .profile .protable img {
                /* width: 80%; */
                width: 250px;
                margin: auto;
                height: 250px;
                border: 2px solid blue;
                border-radius: 70px;
            }
        }

        @media(max-width:500px) {
            .profile .protable img {
                /* width: 80%; */
                width: 270px;
                margin: auto;
                height: 270px;
                border: 2px solid blue;
                border-radius: 70px;
            }
        }

        h2 {
            display: block;
            width: 260px;
            margin-left: auto;
            margin-right: auto;
            color: white;
            font-size: xx-large;
            background: url('https://j.gifs.com/KROqoX.gif');
            color: white;
            font-weight: bold;
            border-radius: 15px;
            padding: 0px 25px;
            margin-bottom: 25px;
            animation-duration: 3s;
            animation-name: slidein;
        }

        @keyframes slidein {
            from {
                margin-left: 100%;
                width: 50%;
            }

            to {
                margin-left: 0%;
                width: 100%;
            }
        }

        .imghover {
            width: 100%;
            position: relative;
            /* border: 2px solid red; */
            margin: auto;
            align-items: center;
        }

        .overlay {
            position: absolute;
            top: 0px;
            left: 33px;
            right: 0;
            background: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190625/ourmid/pngtree-simple-small-fresh-watercolor-company-profile-ppt-background-image_260406.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            overflow: hidden;
            width: 420px;
            height: 407px;
            border-radius: 30px;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }

        .imghover:hover .overlay {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        input {
            color: white;
            background-color: blue;
            font-size: medium;
            font-weight: bold;
            width: 230px;
        }

        #b1,
        #b2 {
            width: 260px;
            padding: 5px;
            margin-top: 20px;
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

        #b1:hover,
        #b2:hover {
            color: black;
        }

        @media(max-width:500px) {
            .overlay {
                position: absolute;
                top: 1px;
                /* bottom: 0; */
                left: 76px;
                right: 0;
                /* background-color: #008CBA; */
                background: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190625/ourmid/pngtree-simple-small-fresh-watercolor-company-profile-ppt-background-image_260406.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                overflow: hidden;
                width: 272px;
                height: 272px;
                border-radius: 70px;
                -webkit-transform: scale(0);
                -ms-transform: scale(0);
                transform: scale(0);
                -webkit-transition: .3s ease;
                transition: .3s ease;
            }
        }
    </style>
</head>

<body>

    <br><br><br><br>
    <center>
        <h2>My Profile</h2>
    </center>
    <div class="profile">
        <div class="protable">
            <!-- <center> -->
            <div class="imghover">
                <img src="image/profile_pic/<?php
                                            echo $row['filename']; ?>" alt="Profile Image" class="center">
                <div class="overlay">
                    <div class="text">
                        <center>
                            <form method="POST" action="profilepic.php" enctype='multipart/form-data'>
                                <input type="file" name="uploadfile" required id="b1" />

                                <div>
                                    <button type="submit" name="upload" id="b1">
                                        UPLOAD
                                    </button>
                                </div>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
            <!-- </center> -->
        </div>
        <div class="protable">
            <div class="ptable">
                <table>
                    <!-- <?php  ?> -->
                    <caption><b>Details</b></caption>
                    <tr>
                        <td><b>User Name</b></td>
                        <td><?php
                            echo $row['name']; ?></td>
                    </tr>

                    <tr>
                        <td><b>Email Address</b></td>
                        <td>
                            <?php
                            echo $row['email'];
                            ?></td>
                    </tr>

                    <tr>
                        <td><b>Mobile No.</b></td>
                        <td><?php echo $row['phone']; ?></td>
                    </tr>

                    <tr>
                        <td><b>City</b></td>
                        <td><?php echo $row['city']; ?></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    <br>
    <div class="profile">
        <div class="changebtn">
            <center>
                <button id="b1" onclick="myFunctionP()">Change Password</button>
                <button id="b1" onclick="myFunctionU()">Update Data</button>
                <button id="b2" onclick="myFunctionD()">Delete Account</button>
            </center>
        </div>
    </div>

    <script>
        function myFunctionD() {
            var r = confirm("Are you sure , you want to delete your account?");
            if (r == true) {
                window.location.href = "delete_account.php";
            } else {
                window.location.href = "profile.php";
            }
        }

        function myFunctionU() {
            var r = confirm("Are you sure , you want to update your data?");
            if (r == true) {
                window.location.href = "update.php";
            } else {
                window.location.href = "profile.php";
            }
        }

        function myFunctionP() {
            var r = confirm("Are you sure , you want to change your password?");
            if (r == true) {
                window.location.href = "change_password.php";
            } else {
                window.location.href = "profile.php";
                // }
            }
        }
    </script>
    <br><br>
    <?php
    include('footer.php');
    ?>
</body>

</html>