<?php
	function verifConnect()
	{
		$connection = new PDO('mysql:host=localhost;dbname=troubadour','root','');
		$requete = $connection->query('SELECT login,mdp FROM utilisateurs');
		$resultat = $requete->fetch();
		return $resultat;
	}

	if(isset($_POST))
	{
		$login = $_POST['login'];
		$mdp = $_POST['mdp'];
		$donnes = verifConnect();

		if($login == $donnes['login'] && $mdp == $donnes['mdp'])
		{
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['mdp'] = $mdp;
			$_SESSION['ok'] = 'ok';
			header('Location:index.php');

		}
		else
		{
			echo 'Erreur de saisie';
			header('Location:../login.php');
		}

	}
?>