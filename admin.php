<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Connexion</title>
</head>
<body>
	<h1>Veuillez vous connecter en tant qu'admin :</h1>
	<form action="co.php" method="post">
		<label for="login">Nom de compte :</label><br>
		<input type="text" placeholder="Nom de compte" id="login" name="login"><br>
		<label for="password">Mot de passe :</label><br>
		<input type="password" placeholder="Mot de passe" id="password" name="password"><br>
		<button>Se connecter</button>
	</form>
</body>
</html>