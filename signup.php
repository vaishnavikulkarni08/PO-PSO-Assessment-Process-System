<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="icon" type="image/x-icon" href="logo.ico">
	<style>
		body {
			background-color: #f5f5f5;
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

		.error {
			color: red;
		}

		.success {
			color: green;
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
		<form action="signup-check.php" method="post">
			<h2>SIGN UP</h2>
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>

			<?php if (isset($_GET['success'])) { ?>
				<p class="success"><?php echo $_GET['success']; ?></p>
			<?php } ?>

			<div class="mb-3">
				<label for="name" class="form-label">Faculty Name</label>
				<?php if (isset($_GET['name'])) { ?>
					<input type="text" id="name" name="name" class="form-control" placeholder="Name" value="<?php echo $_GET['name']; ?>">
				<?php } else { ?>
					<input type="text" id="name" name="name" class="form-control" placeholder="Name">
				<?php } ?>
			</div>

			<div class="mb-3">
				<label for="uname" class="form-label">User Name</label>
				<?php if (isset($_GET['uname'])) { ?>
					<input type="text" id="uname" name="uname" class="form-control" placeholder="User Name" value="<?php echo $_GET['uname']; ?>">
				<?php } else { ?>
					<input type="text" id="uname" name="uname" class="form-control" placeholder="User Name">
				<?php } ?>
			</div>

			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password">
			</div>

			<div class="mb-3">
				<label for="re_password" class="form-label">Confirm Password</label>
				<input type="password" id="re_password" name="re_password" class="form-control" placeholder="Re-enter Password">
			</div>

			<button type="submit" class="btn btn-primary">Sign Up</button>
			<a href="index.php" class="btn btn-link">Already have an account?</a>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
