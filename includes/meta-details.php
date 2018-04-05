<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])) {
		$tbl = "tbl_movies";
		$col = "movies_id";
		$id = $_GET['id'];
		$getSingle = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<?php
	if(!is_string($getSingle)){
		$row = mysqli_fetch_array($getSingle);
			echo "<title>{$row['movies_title']}</title>";
		}else{
			echo "<p>{$getSingle}</p>";
		}
?>
<link rel="icon" href="images/icon/movie-review-icon-xs.png">
<link rel="stylesheet" href="css/foundation.css"/>
<link rel="stylesheet" href="css/app.css"/>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>