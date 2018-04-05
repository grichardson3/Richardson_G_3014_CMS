<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>
<link rel="icon" href="../images/icon/gear-icon-xs.png">
<link rel="stylesheet" href="../css/foundation.css"/>
<link rel="stylesheet" href="../css/app.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>
<body class="adminBody">
	<div>
		<br>
		<div class="row">
			<div class="small-12 columns"><h2 class="centerText whiteText">Welcome <?php echo $_SESSION['user_name'];?></h2></div>
			<div class="small-12 columns"><p class="centerText whiteText">You are logged in to the admin page!</p></div>
		</div>
		<br>
		<div class="row">
			<div class="small-12 medium-2 large-2 columns end"><h3 class="hidden">Edit Movies</h3><a href="admin_allmovielist.php"><p class="centerText">Edit Movies</p></a></div>
			<div class="small-12 medium-2 large-2 columns end"><h3 class="hidden">Add Movie</h3><a href="admin_addmovie.php"><p class="centerText">Add Movie</p></a></div>
			<div class="small-12 medium-2 large-2 columns end"><h3 class="hidden">Create User</h3><a href="admin_createuser.php"><p class="centerText">Create User</p></a></div>
			<div class="small-12 medium-2 large-2 columns end"><h3 class="hidden">Edit User</h3><a href="admin_edituser.php"><p class="centerText">Edit User</p></a></div>
			<div class="small-12 medium-2 large-2 columns end"><h3 class="hidden">Delete User</h3><a href="admin_deleteuser.php"><p class="centerText">Delete User</p></a></div>
			<div class="small-12 medium-2 large-2 columns end"><h3 class="hidden">Sign Out</h3><a href="phpscripts/caller.php?caller_id=logout"><p class="centerText">Sign Out</p></a></div>
		</div>
	</div>
	<script src="../js/vendor/jquery.min.js"></script>
	<script src="../js/vendor/what-input.min.js"></script>
	<script src="../js/foundation.min.js"></script>
	<script src="../js/app.js"></script>
</body>
</html>