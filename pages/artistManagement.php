<?php
	include ('../header.php');
	include_once('../scripts/session.php');

?>
<html>
	<div class="container" id="menuP">
		<head>

		</head>
		<body>
			<h1>Artist Management</h1> 
			<br>
			<section class="container">
				<p>To add artist, press:</p>
				<a href="/wwwproject/pages/addArtist.php" class="btn btn-primary"  role="button" value="add movies">Add Artist</a>
				<br>
				<p>To view the list of artist, press:</p>
				<a href="/wwwproject/pages/listArtist.php" class="btn btn-primary"  role="button" value="add movies">Artist List</a>
				<br>
				<br>
				<a href="/wwwproject/pages/welcome.php" class="btn btn-primary" role="button" value="homePage">Back</a>
			</section>
		</body>
	</div>
</html>