<?php
if(isset($_POST['username'], $_POST['mdp']))
{
	$pseudo = $_POST['username'];
	$password = $_POST['mdp'];
	if (empty($username))
		$error = "username incorrect";
	else if (empty($password))
		$error = "Password incorrect";
	else
	{
		$fileName = file_get_contents('info_user.json');
		$file = json_decode($json, true);
		$count = 0;
		$max = sizeof($list);
		while ($count < $max)
		{
			$user = $list[$count];
			if ($user['username'] == $username)
			{
				if ($user['password'] == $password)
				{
					$_SESSION['username'] = $user['username'];
					$_SESSION['mail'] = $user['mail'];
					header("Location: index.php");
					exit;
				}
				else
					$error = 'Incorrect Password';
			}
			$count++;
		}
		$error = 'Incorrect username';
	}
}
?>