<?php 
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





 ?>