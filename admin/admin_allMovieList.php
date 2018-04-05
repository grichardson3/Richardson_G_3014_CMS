<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();

	if(isset($_GET['filter'])){
		$tbl = "tbl_movies";
		$tbl2 = "tbl_genre";
		$tbl3 = "tbl_mov_genre";
		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = "action";
		$getMovies = filterResults($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>All Movies</title>
<link rel="icon" href="../images/icon/gear-icon-xs.png">
<link rel="stylesheet" href="../css/foundation.css"/>
<link rel="stylesheet" href="../css/app.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>
<body>
	<br>
		<div class="row">
			<div class="small-12 columns"><h2 class="centerText">All Movies</h2></div>
			<div class="small-12 columns"><p class="centerText">Select which movie you would like to edit.</p></div>
		</div>
	<br>
	<div class="row">
		<div class="small-12 medium-2 large-2 columns end"><a href="admin_allmovielist.php"><p class="centerText blackText">All Movies</p></a></div>
		<div class="small-12 medium-2 large-2 columns end"><a href="admin_addmovie.php"><p class="centerText blackText">Add Movie</p></a></div>
		<div class="small-12 medium-2 large-2 columns end"><a href="admin_createuser.php"><p class="centerText blackText">Create User</p></a></div>
		<div class="small-12 medium-2 large-2 columns end"><a href="admin_edituser.php"><p class="centerText blackText">Edit User</p></a></div>
		<div class="small-12 medium-2 large-2 columns end"><a href="admin_deleteuser.php"><p class="centerText blackText">Delete User</p></a></div>
		<div class="small-12 medium-2 large-2 columns end"><a href="phpscripts/caller.php?caller_id=logout"><p class="centerText blackText">Sign Out</p></a></div>
	</div>
	<br>
	<div class="row">
<?php
	if(!is_string($getMovies)){
		while($row = mysqli_fetch_array($getMovies)){
			echo "<div class=\"small-12 medium-6 large-4 columns end\">
							<h3 class=\"hidden\">Individual Movie</h3>
							<p class=\"all\">{$row['movies_title']}</p>
							<p>{$row['movies_date']}</p>
							<a class=\"blackText\" href=\"editall.php?id={$row['movies_id']}\">Edit Movie Details</a><br><br><br>
						</div>
			";
		}
	}else{
		echo "<p class=\"error\">{$getMovies}</p>";
	}

	include('../includes/footer.php');
?>
	</div>
	<script src="../js/vendor/jquery.min.js"></script>
	<script src="../js/vendor/what-input.min.js"></script>
	<script src="../js/foundation.min.js"></script>
	<script src="../js/app.js"></script>
</body>
</html>