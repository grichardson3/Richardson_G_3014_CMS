<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
	$id = $_SESSION['user_id'];
	$tbl = "tbl_user";
	$col = "user_id";
	$popForm = getSingle($tbl, $col, $id);
	$info = mysqli_fetch_array($popForm);
	//echo $info;
	if(isset($_POST['submit'])){
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$result = editUser($id, $fname, $username, $password, $email);
		$message = $result;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit User</title>
<link rel="icon" href="../images/icon/gear-icon-xs.png">
<link rel="stylesheet" href="../css/foundation.css"/>
<link rel="stylesheet" href="../css/app.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>
<body>
	<br>
		<div class="row">
			<div class="small-12 columns"><h2 class="centerText">Edit User</h2></div>
			<div class="small-12 columns"><p class="centerText">Edit an existing user for the database.</p></div>
		</div>
	<br>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_edituser.php" method="post">
		<div class="row">
			<div class="small-12 large-6 columns">
				<label>First Name:</label>
				<input type="text" name="fname" value="<?php echo $info['user_fname'];  ?>">
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<label>Username:</label>
				<input type="text" name="username" value="<?php echo $info['user_name'];  ?>">
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<label>Password:</label>
				<input type="text" name="password" value="<?php echo $info['user_pass'];  ?>">
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<label>Email:</label>
				<input type="text" name="email" value="<?php echo $info['user_email'];  ?>"><br>
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<input type="submit" name="submit" value="Edit Account">
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