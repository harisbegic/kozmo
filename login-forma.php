<!DOCTYPE html>
<html>
<head>
	<title>Kozmo - Login</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<form action="login.php" method="post">
		<h2>Kozmo - Login</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<input type="text" name="korisnicko_ime" placeholder="Korisničko ime" required><br>
		<input type="password" name="sifra" placeholder="Šifra" required><br>

		<button type="submit">Login</button>
	</form>

</body>
</html>