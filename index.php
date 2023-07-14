<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="icon" type="image/x-icon" href="logo.ico">
	<style>
		body {
			background-color: #f8f9fa;
		}
		.container {
			max-width: 400px;
			margin: 0 auto;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 20px;
			background-color: #ccd4d4;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		.logo {
			width: 75px;
			height: 75px;
		}

		.institute-details {
			font-size: 14px;
			margin-top: -5px;
		}
	</style>
</head>
<body><br>
	<div class="text-center">
		<img src="logo.jpg" class="logo" alt="Logo">
		<h5>B.V.V.Sangha's</h5>
		<h3><b>BASAVESHWAR ENGINEERING COLLEGE, BAGALKOTE</b></h3>
		<p class="institute-details">(An Autonomous Institute, Affiliated to Visvesvaraya Technological University, Belagavi) Karnataka State, India</p>
		<h3><b>DEPARTMENT OF INFORMATION SCIENCE AND ENGINEERING</b></h3>
	</div>
	<div class="container">
		<form action="login.php" method="post">
			<h2 class="mb-4">LOGIN</h2>
			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-danger"><?php echo $_GET['error']; ?></div>
			<?php } ?>
			<div class="mb-3">
				<label for="uname" class="form-label">User Name</label>
				<input type="text" id="uname" name="uname" class="form-control" placeholder="User Name">
			</div>

			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password">
			</div>

			<button type="submit" class="btn btn-primary">Login</button>
			<a href="signup.php" class="btn btn-link">Create an account</a>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
