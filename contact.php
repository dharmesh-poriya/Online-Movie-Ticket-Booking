<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>RegistrationForm_v7 by Colorlib</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" href="contact/css/style.css">
</head>

<body>

	<div class="wrapper">
		<div class="inner">
			<form action="contact2.php" method="POST">
				<h3>Contact Us</h3>
				<p>Here, You can Write any suggestion for Improving This Website.</p>
				<label class="form-group">
					<input type="text" class="form-control" name="name" required>
					<span>Your Name</span>
					<span class="border"></span>
				</label>
				<label class="form-group">
					<input type="email" class="form-control" name="mail" required>
					<span for="">Your Mail</span>
					<span class="border"></span>
				</label>
				<label class="form-group">
					<textarea id="" class="form-control" name="massage" required></textarea>
					<span for="">Your Message</span>
					<span class="border"></span>
				</label>
				<button>Submit
					<i class="zmdi zmdi-arrow-right"></i>
				</button>
			</form>
		</div>
	</div>

</body>

</html>