<?php
require "./includes/common.php";
if (isset($_SESSION["id"])) {
	header("location: products.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>LifeStyle Stores/Sign Up</title>
	<style>
		/* body{
    padding-top: 100px;
} */
		.navst {
			/* margin-bottom: 0px !important;  */
			border-radius: 0px !important;
		}

		footer {
			padding: 15px;
			border-top: 1px solid #e5e5e5;
			background-color: #101010;
			color: #9d9d9d;
			bottom: 0;
			width: 100%;
			text-align: right;
			font-size: 15px;
		}

		.pc {
			width: 25%;
			margin: auto;
		}

		.panel-margin {
			margin-top: 80px;
			margin-bottom: 80px;
		}
	</style>
	<!-- link to Bootstrap minified css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- link to Jquery minified-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- link to Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- link to external CSS -->
	<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
	<?php
	include './includes/header.php';
	?>
	<div class="container panel-margin">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">SignUp</h2>
			</div>
			<div class="panel-body">
				<form method="POST" action="signup_script.php">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required pattern=".{8,}">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="contact" placeholder="Contact" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="city" placeholder="City" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address" required>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="panel-footer">
				Already have an account?Click <a href="login.html">here</a> to login.
			</div>
		</div>
	</div>
	<?php
	include './includes/footer.php';
	?>
</body>

</html>