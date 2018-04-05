<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();

	if(isset($_POST['submit'])){
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$lvllist = $_POST['lvllist'];
		if(empty($lvllist)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $lvllist);
			$message = $result;
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create User</title>
<link rel="icon" href="../images/icon/gear-icon-xs.png">
<link rel="stylesheet" href="../css/foundation.css"/>
<link rel="stylesheet" href="../css/app.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>
<body>
	<br>
		<div class="row">
			<div class="small-12 columns"><h2 class="centerText">Create User</h2></div>
			<div class="small-12 columns"><p class="centerText">Create a new user for the database.</p></div>
		</div>
	<br>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_createuser.php" method="post">
		<div class="row">
			<div class="small-12 large-6 columns">
				<h3 class="hidden">First Name</h3>
				<label>First Name:</label>
				<input type="text" name="fname" value="">
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<h3 class="hidden">Username</h3>
				<label>Username:</label>
				<input type="text" name="username" value="">
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<h3 class="hidden">Password</h3>
				<label>Password:</label>
				<input type="text" name="password" value="">
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<h3 class="hidden">E-Mail</h3>
				<label>Email:</label>
				<input type="text" name="email" value="">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="small-9 large-3 columns">
				<h3 class="hidden">User Level</h3>
				<select name="lvllist">
					<option value="">Select User Level</option>
					<option value="2">Web Admin</option>
					<option value="1">Web Master</option>
				</select><br>
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<input type="submit" name="submit" value="Create User">
			</div>
		</div>
	</form>
	<br><br>
	<div class="row">
		<div class="small-12 columns"><a href="admin_index.php"><p class="blackText">BACK...</p></a></div>
	</div>
	<script src="../js/vendor/jquery.min.js"></script>
	<script src="../js/vendor/what-input.min.js"></script>
	<script src="../js/foundation.min.js"></script>
	<script src="../js/app.js"></script>
</body>
</html>