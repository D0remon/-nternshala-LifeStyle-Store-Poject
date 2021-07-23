<?php
require './includes/common.php';

// destroy the session if present
if (!isset($_SESSION["email"])) {
	header("location: index.php");
} else {
	session_unset();
	session_destroy();
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>LifeStyle Stores</title>
	<style>
		footer {
			padding: 15px;
			border-top: 1px solid #e5e5e5;
			background-color: #101010;
			color: #9d9d9d;
			bottom: 0;
			width: 100%;
			text-align: right;
			font-size: 15px;
			position: fixed;
		}

		.logoutmsg {
			margin-top: 51px;
		}
	</style>
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
	require './includes/header.php';
	?>
	<div class="container panel-margin">
		<div class="alert alert-success logoutmsg">
			You have successfully logged out. Click <a href="index.php">here</a> to go back to index page.
		</div>
	</div>
	<?php
	require './includes/footer.php';
	?>
</body>

</html>