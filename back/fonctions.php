<?php
	

	function getPDO()
	{
		$connection = new PDO('mysql:host=localhost;dbname=troubadour','root','',array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		return $connection;	
	}






	// Fonctions bières 

	function getBeers()
	{
		$connection = getPDO();
		$requete = $connection->query('SELECT id,nom,prix FROM bieres ORDER BY nom');
		$resultat = $requete->fetchAll();
		return $resultat;
	}

	function getBeer($id)
	{
		$connection = getPDO();
		$requete = $connection->prepare('SELECT id,nom,prix FROM bieres WHERE id=:id');
		$requete->bindValue(':id',$id);
		$requete->execute();
		$resultat = $requete->fetch();
		return $resultat;
	}

	function ajoutBiere($nom,$prix)
	{
		$connection = getPDO();
		$requete = $connection->prepare('INSERT INTO bieres (nom,prix) VALUES (:nom,:prix)');
		$requete->bindValue(':nom',$nom);
		$requete->bindValue(':prix',$prix);
		$requete->execute();
	}

	function updateBeer($id,$nom,$prix)
	{
		$connection = getPDO();
		$requete = $connection->prepare('UPDATE bieres SET
			nom=:nom,prix=:prix WHERE id=:id');
		$requete->bindValue(':id',$id);
		$requete->bindValue(':nom',$nom);
		$requete->bindValue(':prix',$prix);
		$requete->execute();
	}

	function deleteBeer($id)
	{
		$connection = getPDO();
		$requete = $connection->prepare('DELETE FROM bieres WHERE id=:id');
		$requete->bindValue(':id',$id);
		$requete->execute();
	}

	



	//Fonctions Alcools

	function getAlchool()
	{
		$connection = getPDO();
		$requete = $connection->query('SELECT id,nom,prix FROM alcools ORDER BY nom');
		$resultat = $requete->fetchAll();
		return $resultat;
	}

	function getUnAlcool($id)
	{
		$connection = getPDO();
		$requete = $connection->prepare('SELECT id,nom,prix FROM alcools WHERE id=:id');
		$requete->bindValue(':id',$id);
		$requete->execute();
		$resultat = $requete->fetch();
		return $resultat;
	}

	function ajoutAlcool($nom,$prix)
	{
		$connection = getPDO();
		$requete = $connection->prepare('INSERT INTO alcools (nom,prix) VALUES (:nom,:prix)');
		$requete->bindValue(':nom',$nom);
		$requete->bindValue(':prix',$prix);
		$requete->execute();
	}

	function updateAlcool($id,$nom,$prix)
	{
		$connection = getPDO();
		$requete = $connection->prepare('UPDATE alcools SET
			nom=:nom,prix=:prix WHERE id=:id');
		$requete->bindValue(':id',$id);
		$requete->bindValue(':nom',$nom);
		$requete->bindValue(':prix',$prix);
		$requete->execute();
	}



	function deleteAlcool($id)
	{
		$connection = getPDO();
		$requete = $connection->prepare('DELETE FROM alcools WHERE id=:id');
		$requete->bindValue(':id',$id);
		$requete->execute();
	}




	// Fonctions Softs 

		function getSofts()
	{
		$connection = getPDO();
		$requete = $connection->query('SELECT id,nom,prix FROM softs ORDER BY nom');
		$resultat = $requete->fetchAll();
		return $resultat;
	}

	function getSoft($id)
	{
		$connection = getPDO();
		$requete = $connection->prepare('SELECT id,nom,prix FROM softs WHERE id=:id');
		$requete->bindValue(':id',$id);
		$requete->execute();
		$resultat = $requete->fetch();
		return $resultat;
	}


	function ajoutSoft($nom,$prix)
	{
		$connection = getPDO();
		$requete = $connection->prepare('INSERT INTO softs (nom,prix) VALUES (:nom,:prix)');
		$requete->bindValue(':nom',$nom);
		$requete->bindValue(':prix',$prix);
		$requete->execute();
	}

	function updateSoft($id,$nom,$prix)
	{
		$connection = getPDO();
		$requete = $connection->prepare('UPDATE softs SET
			nom=:nom,prix=:prix WHERE id=:id');
		$requete->bindValue(':id',$id);
		$requete->bindValue(':nom',$nom);
		$requete->bindValue(':prix',$prix);
		$requete->execute();
	}

	function deleteSoft($id)
	{
		$connection = getPDO();
		$requete = $connection->prepare('DELETE FROM softs WHERE id=:id');
		$requete->bindValue(':id',$id);
		$requete->execute();
	}

?>