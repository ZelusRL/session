<?php
if(isset($_POST['username'], $_POST['mdp'], $_POST['mail']))
{
	$pseudo = $_POST['username'];
	$password = $_POST['mdp'];
	$mail = $_POST['mail'];
	
	if (strlen($pseudo) < 4 || strlen($pseudo) > 10)
	{
		$error = "Le pseudo doit comptenir entre 4 et 10 caractères.";
	}

	else if (strlen($password) <4 || strlen($password) > 15) 
	{
		$error = "Le mot de passe doit comptenir entre 4 et 15 caractères.";
	}

}
?>