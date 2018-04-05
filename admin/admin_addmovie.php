<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
	
	$tbl = "tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_POST['submit'])){
		$cover = $_FILES['cover'];
		$title = $_POST['title'];
		$date = $_POST['date'];
		$desc = $_POST['desc'];
		$director = $_POST['director'];
		$genre = $_POST['genList'];
		$result = addMovie($cover, $title, $date, $desc, $director, $genre);
		$message = $result;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Movie</title>
<link rel="icon" href="../images/icon/gear-icon-xs.png">
<link rel="stylesheet" href="../css/foundation.css"/>
<link rel="stylesheet" href="../css/app.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
</head>
<body>
	<br>
		<div class="row">
			<div class="small-12 columns"><h2 class="centerText">Add Movie</h2></div>
			<div class="small-12 columns"><p class="centerText">Add a new movie to the database.</p></div>
		</div>
	<br>
	<?php if(!empty($message)){ echo $message;} ?>
	<form action="admin_addmovie.php" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="small-12 large-6 columns">
				<h3 class="hidden">Movie Title</h3>
				<label>Movie Title:</label>
				<input type="text" name="title" value="">
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-1 columns">
				<h3 class="hidden">Cover Image</h3>
				<label>Cover:</label>
			</div>
			<div class="small-12 large-5 columns">
				<input type="file" name="cover" value="">
			</div>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<h3 class="hidden">Movie Date</h3>
				<label>Movie Date:</label>
				<input type="text" name="date" value="">
				<br>
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<h3 class="hidden">Movie Description</h3>
				<label>Movie Description:</label>
				<input type="text" name="desc" value="">
				<br>
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<h3 class="hidden">Movie Director</h3>
				<label>Movie Director:</label>
				<input type="text" name="director" value="">
				<br>
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<select name="genList">
					<h3 class="hidden">Movie Genre</h3>
					<option>Please select a movie genre...</option>
					<?php
					while($row = mysqli_fetch_array($genQuery)){
						echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
					}
					?>
				</select><br>
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-6 columns">
				<input type="submit" name="submit" value="Add Movie">
			</div>
		</div>
	</form>
	</div>
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