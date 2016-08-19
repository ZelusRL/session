<?php
if(isset($_POST['username'], $_POST['mdp'], $_POST['mail']))
{
	$pseudo = $_POST['username'];
	$password = $_POST['mdp'];
	$password2 = $_POST['mdp2']; 
	$mail = $_POST['mail'];
	
	if (strlen($pseudo) < 4 || strlen($pseudo) > 10)
	{
		$error = "Le pseudo doit comptenir entre 4 et 10 caractères.";
	}

	else if (strlen($password) <4 || strlen($password) > 15) 
	{
		$error = "Le mot de passe doit comptenir entre 4 et 15 caractères.";
	}
	else if ($password != $password2)
	{
		$error = "Le mot de passe n'est pas confirmé";
	}
	else
	{
		$postArray = array(
			'id'=> uniqid(),
			'pseudo' => $_POST['username'],
			'password' => $_POST['mdp'],
			'email' => $_POST['mail'],
		);
		$fileName = 'info_user.json';
		$file = file_get_contents($fileName);
		$tab = json_decode($file, true);
		$tab[] = $postArray;
		$json = json_encode($tab);
		file_put_contents($fileName, $json);
		header('Location: index.php?page=login');
		exit;
	}
}
?>