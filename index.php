<?php 
//Formulaire html5 
?>
<!Doctype>
<html>
	<head></head>
	<body>	
		<section>
			<form action="login.php" method="POST">
				<label for="identifiant">Votre identifiant:</label><br/>
				<input type="text" name="identifiant" /><br/>
				<label for="pass">Votre mot de passe:</label><br/>
				<input type="password" name="pass" /><br/>
				<input type="submit" value="Valider" />
			</form>
		</section>
	</body>
</html>