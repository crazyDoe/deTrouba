<?php
 include_once('fonctions.php');

	if(!empty($_POST['nom'] && $_POST['prix']))
	{
		//var_dump($_POST);
		$nom = $_POST['nom'];
		$prix = $_POST['prix'];
		if(empty($prix))
			echo "Erreur";
		$type = $_POST['optionsRadios'];

		if($type == 'bieres')
		{
			ajoutBiere($nom,$prix);
			header('Location:ajoutAutre.php');
		}

		else if($type == 'alcools')
		{
			ajoutAlcool($nom,$prix);
			header('Location:ajoutAutre.php');
		}

		else if($type =='softs')
		{
			ajoutSoft($nom,$prix);
			header('Location:ajoutAutre.php');
		}
	}

	else
	{
		echo 'Erreur de saisie';
		header('Location:ajoutAutre.php');
	}
?>