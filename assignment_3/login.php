<?php
require './includes/common.php';
?>
<!DOCTYPE html>
<html>

<head>
	<style>
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
			margin: auto;
			width: 50% !important;
		}

		.panel-margin {
			margin-top: 80px;
			margin-bottom: 80px;
		}
	</style>
	<title>Login to LifeStyle Stores</title>
	<!-- link to Bootstrap minified css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- link to Jquery minified-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- link to Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- link to external CSS -->
</head>

<body>
	<?php
	include './includes/header.php';
	?>
	<div class="container panel-margin">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Login to make purchase</h3>
			</div>
			<div class="panel-body">
				<form action="login_submit.php" method="POST">
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
			<div class="panel-footer">
				Don't have an account?Click <a href="signup.php">here</a> to create one.
			</div>
		</div>
	</div>
	<?php
	include './includes/footer.php';
	?>
</body>

</html>