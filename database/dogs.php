<?php 


function dogQuery($filter){
	$user = 'root';
	$pass = 'root';
	$db = 'dogsandcats';
	$host = 'localhost';
	$port = 8889;

	try
	{
		$bdd = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pass);
	}
	catch (Exception $e)
	{
	    die('Erreur : ' . $e->getMessage());
	}

	if ($filter == 'all'){
		$reponse = $bdd->query('SELECT * FROM dogs');
	} else {
		$reponse = $bdd->query('SELECT * FROM dogs WHERE nationalite=\''.$filter.'\'');
	}

	while ($donnees = $reponse->fetch())
	{
		$results[] = $donnees;
	}
	$reponse->closeCursor();

	return $results;
}


 ?>