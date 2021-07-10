<?php
session_start();
if (isset($_GET['token'])) {
	$_SESSION['token'] = $_GET['token'];
} else {

	if ($_POST['password'] != $_POST['password_two']) {
		echo " <script>
            alert('Your entered both password should be same...');
            location.replace('reset_password.php?$token');
        </script>";
	} else {
		$token =  $_SESSION['token'];
		require_once "config.php";
		$sql = "SELECT * FROM `tbl_registration` WHERE `token`='$token';";
		$reset_pass = mysqli_query($con, $sql);
		if (!$reset_pass) {
			echo " <script>
            alert('Something went wrong!!');
            // location.replace('index.php');
        </script>";
		} else {
			$pass = mysqli_fetch_assoc($reset_pass);
			if (!$pass) {
				echo " <script>
            alert('This link was dead!!');
            location.replace('index.php');
			</script>";
			} else {
				$Password = $_POST['password'];
				$subtrac = rand(1, 50);
				$change_token = $token - $subtrac;
				$query = "UPDATE `tbl_registration` SET `password` ='$Password', `token` = '$change_token' WHERE token = '$token'";
				$result = mysqli_query($con, $query);
				if ($result) {
					unset($_SESSION['token']);
					echo " <script>
            alert('Your password have been updated successfully!!');
            location.replace('index.php');
        </script>";
				}
			}
		}
	}
}
?>
<!-- =================================================== -->
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		form {
			border: 3px solid #f1f1f1;
		}

		input[type=password] {
			width: 50%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
			border-radius: 10px;
		}

		button {
			background-color: #04AA6D;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 50%;
			border-radius: 10px;
		}

		button:hover {
			opacity: 0.8;
		}

		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}

		img.avatar {
			width: 20%;
			border-radius: 50%;
		}

		.container {
			padding: 16px;
		}

		span.psw {
			float: right;
			padding-top: 16px;
		}

		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}

			.cancelbtn {
				width: 100%;
			}
		}
	</style>
</head>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div class="imgcontainer">
			<img src="https://www.seekpng.com/png/small/207-2073167_its-a-padlock-forgot-password-vector-icon.png" alt="Avatar" class="avatar">
		</div>

		<div class="container">
			<center>
				<input id="password" name="password" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Your Password contain minimum eight characters and maximum fifteen characters, at least one uppercase letter, one lowercase letter, one number and one special character' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>

				<input id="password_two" name="password_two" type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required>

				<button type="submit" name="submit">Forgot Password</button>
			</center>
		</div>

		<div class="container" style="background-color:#f1f1f1">
			<center>
				<a href="index.php">Cancel</a>
			</center>
		</div>

	</form>

</body>

</html>