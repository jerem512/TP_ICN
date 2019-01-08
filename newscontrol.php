<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Centre des news</title>
</head>
<body>
	<?php
	 session_start();
	 ?>
	<form action="newspost.php">
		<legend>Ecrire une news :</legend><br>
		<textarea name="news" id="news" placeholder="Rédiger une news" cols="30" rows="5"></textarea><br>
		<button>Poster</button>
	</form>
</body>
</html>