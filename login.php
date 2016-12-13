<?php 
/*
Traitement du formulaire
*/ 
if(!empty($_POST["identifiant"]) && !empty($_POST["pass"]))
{
	$identifiant 	= htmlspecialchars(trim($_POST["identifiant"]));
	$password 		= htmlspecialchars(trim($_POST["pass"]));
	if($identifiant == "Bulg0re" && $password == "github")
		echo "Bienvenue!!!";
	else
		echo "Dommage..."
}
else
	echo "Partisan du moindre effort...";
?>
