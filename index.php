<?php 
	include('includes/meta-index.php');
?>
<body>
<?php 
	include('includes/nav.php');
?>
<div id="container">
	<div class="row movieObject">
		<?php
			if(!is_string($getMovies)){
				while($row = mysqli_fetch_array($getMovies)){
					echo"<div class=\"small-12 medium-6 large-4 columns end\">
								<h2 class=\"all\">{$row['movies_title']}</h2>
								<p class=\"dateText\"><span class=\"underline\">Release Date</span><span>: </span>{$row['movies_date']}</p>
								<a href=\"details.php?id={$row['movies_id']}\"><img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\"></a><br><br>
							</div>";
				}
			}else{
				echo "<p>{$getMovies}</p>";
			}
		?>
	</div>
</div>
<?php
	include('includes/footer.php');
?>
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/what-input.min.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>