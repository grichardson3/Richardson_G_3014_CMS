<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete User</title>
<link rel="icon" href="../images/icon/gear-icon-xs.png">
<link rel="stylesheet" href="../css/foundation.css"/>
<link rel="stylesheet" href="../css/app.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>
<body>
	<br>
		<div class="row">
			<div class="small-12 columns"><h2 class="centerText">Delete User</h2></div>
			<div class="small-12 columns"><p class="centerText">Delete an existing user for the database.</p></div>
			<div class="small-12 columns"><p class="centerText redText">* Note: Deleted users can not be recovered! *</p></div>
		</div>
	<br>
	<div class="row">
		<h3 class="hidden">Individual User</h3>
		<table>
			<tr>
				<th>First Name</th>
				<th>Username</th>
				<th>E-Mail</th>
				<th>(One Click)</th>
			</tr>
				<?php
					while($row = mysqli_fetch_array($users)){
						echo "<tr>
						<td><p class=\"centerText\">{$row['user_fname']}</p></td>
						<td><p class=\"centerText\">{$row['user_name']}</p></td>
						<td><p class=\"centerText\">{$row['user_email']}</p></td>
						<td><a class=\"centerText redText\" href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Remove User</a></td>
						</tr>";
					}
				?>
		</table>
	</div>
	<br>
	<div class="row">
		<div class="small-12 columns"><a href="admin_index.php"><p class="blackText">BACK...</p></a></div>
	</div>
	<script src="../js/vendor/jquery.min.js"></script>
	<script src="../js/vendor/what-input.min.js"></script>
	<script src="../js/foundation.min.js"></script>
	<script src="../js/app.js"></script>
</body>
</html>