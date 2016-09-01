 <?php
 include_once('fonctions.php');

		
	//var_dump($_POST);
	$nom = $_POST['nom'];
	$prix = $_POST['prix'];
	$id = $_POST['id'];

	updateAlcool($id,$nom,$prix);

	header('Location:modifAutre.php');