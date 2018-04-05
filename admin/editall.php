<?php
	require_once('phpscripts/config.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
?>
<!doctype html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Edit Movie Details</title>
	<link rel="icon" href="../images/icon/gear-icon-xs.png">
	<link rel="stylesheet" href="../css/foundation.css"/>
	<link rel="stylesheet" href="../css/app.css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	</head>
	<body>
		<br>
		<div class="row">
			<div class="small-12 columns"><h2 class="centerText">Edit Movie</h2></div>
			<div class="small-12 columns"><p class="centerText">Edit the details of your movie.</p></div>
		</div>
	<br>
		<div class="row">
			<div class="small-12 large-6 columns">
		<?php
			$tbl = "tbl_movies";
			$col = "movies_id";
			$id = $_GET['id'];
			echo single_edit($tbl, $col, $id);
		?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="small-12 columns"><a href="admin_allmovielist.php"><p class="blackText">BACK...</p></a></div>
		</div>
	</body>
</html>