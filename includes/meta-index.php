<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['filter'])){
		$tbl1 = "tbl_movies";
		$tbl2 = "tbl_genre";
		$tbl3 = "tbl_moviesgenre";
		$col1 = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = $_GET['filter'];
		$getMovies = filterType($tbl1, $tbl2, $tbl3, $col1, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<title>GR Movie Review</title>
	<link rel="icon" href="images/icon/movie-review-icon-xs.png">
	<link rel="stylesheet" href="css/foundation.css"/>
	<link rel="stylesheet" href="css/app.css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>