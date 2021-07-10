
<?php
if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if (strcmp($password, $cpassword)) {
        echo " <script>
            alert('both password are must be same');
            location.replace('registration.php');
        </script>";
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $city = $_POST['city'];
        $tmp = mt_rand(1, 9);
        do {
            $tmp .= mt_rand(0, 9);
        } while (++$i < 14);
        include('config.php');
        extract($_POST);
        $sql = "INSERT INTO `tbl_registration` (`user_id`,  `name`, `email`, `phone`, `password`, `city`, `token`,`filename`) VALUES (NULL, '$name', '$email', '$phone', '$password','$city','$tmp','default.png');";
        $result = mysqli_query($con, $sql);

        if ($result) {
            session_start();
            $id = mysqli_insert_id($con);
            $_SESSION['user'] = $id;
            // ----------------------------

            $to = $email;
            $subject = "Registration Email";

            $message = "<html>
            <head>
            <title>$name</title>
            </head>
            <body>
            <h2>Hello $name</h2>
            <h3>Welcome to Cineplex Cinema</h3>
            <p>Start your first booking on specific movie...</p>
            <ol><li>Bollywood Movie</li><li>Hollywood Movie</li><li>South Movie</li><li>Gujarati Movie</li></ol>
            </br></br>
            <h1>Thank You!!</h1>
            </body>
            </html>";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <cineplex@gmail.com>' . "\r\n";
            if (mail($to, $subject, $message, $headers)) {
                echo " <script>
                    alert('Successfull Registration');
                    location.replace('index.php');
                </script>";
            }
        } else {
            echo " <script>
                    alert('Email ID already exist, Not allowed to   use same email ID');
                    location.replace('registration.php');
                </script>";
        }
    }
} else {
    echo " <script>
                    alert('Email ID already exist, Not allowed to   use same email ID');
                    location.replace('registration.php');
                </script>";
}

?>
