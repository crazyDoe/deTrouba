 <?php
 include_once('fonctions.php');

		
	//var_dump($_POST);
	$nom = $_POST['nom'];
	$prix = $_POST['prix'];
	$id = $_POST['id'];

	updateBeer($id,$nom,$prix);

	header('Location:modifPintes.php');