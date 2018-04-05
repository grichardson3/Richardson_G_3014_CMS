<?php
	require_once('phpscripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill out the required fields.";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<link rel="icon" href="../images/icon/gear-icon-xs.png">
<link rel="stylesheet" href="../css/foundation.css"/>
<link rel="stylesheet" href="../css/app.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>
<body class="adminLogin">
	<br><br>
		<div class="row">
			<div class="small-12 columns"><h2 class="centerText whiteText">Movie Review Admin Login</h2></div>
		</div>
	<br>
	<?php if(!empty($message)){ echo $message;} ?>
	<form action="admin_login.php" method="post">
		<div class="row">
			<div class="small-12 medium-6 medium-push-3 large-4 large-push-4 columns">
				<h3 class="hidden">Username</h3>
				<label><p class="whiteText">Username:</p></label>
				<input type="text" name="username" value="">
			</div>
		</div>
		<div class="row">
			<div class="small-12 medium-6 medium-push-3 large-4 large-push-4 columns">
				<h3 class="hidden">Password</h3>
				<label><p class="whiteText">Password:</p></label>
				<input type="password" name="password" value="">
				<br>
			</div>
		</div>
		<div class="row">
			<div class="small-12 medium-6 medium-push-3 large-4 large-push-4 columns">
				<input type="submit" name="submit" value="Sign In">
			</div>
		</div>
	</form>
	<script src="../js/vendor/jquery.min.js"></script>
	<script src="../js/vendor/what-input.min.js"></script>
	<script src="../js/foundation.min.js"></script>
	<script src="../js/app.js"></script>
</body>
</html>