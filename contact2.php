<?php

if(!empty($_POST["massage"]))
    $massage1 = $_POST["massage"];

    $to = "dharmeshkporiya@gmail.com";
    $subject = "email";
    $message = "Sended by :- " . $_POST['mail'] . " \n " . $massage1;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
    if (mail($to, $subject, $message, $headers))
    {
        echo '<script>
        alert("Thank you, Your massage has been send us");
        location.replace("index.php");
    </script>';
    }
    else
    echo 'ERROR';
