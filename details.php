<?php
	include('includes/meta-details.php');
?>
<body>
<?php
	include('includes/nav.php');
?>
	<div id="container">
		<div class="row movieObject">
			<?php
				if(!is_string($getSingle)){
					echo "<div class=\"small-12 columns\">
									<h2>{$row['movies_title']}</h2>
									<p class=\"dateText\"><span class=\"underline\">Release Date</span><span>: </span>{$row['movies_date']}</p>
								</div>
								<div class=\"small-12 large-3 columns\">
									<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\"><br><br>
								</div>
								<div class=\"small-12 large-9 columns\">
									<p class=\"descText\">{$row['movies_desc']}</p>
								</div>
								<div class=\"small-12 columns\">
									<div id=\"topLink\">
										<a href=\"index.php\">Back...</a><br><br>
									</div>
								</div>";
				}else{
					echo "<p>{$getSingle}</p>";
				}
			?>
		</div>
	</div>
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/what-input.min.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>