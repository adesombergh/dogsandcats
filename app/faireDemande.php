<?php 

function faireDemande($demande)
{
	$result = 0;
	if ($demande['page']=="dogs") {
		include_once 'database/dogs.php';
		$result = dogQuery($demande['filter']);
	}
	return $result;
}




?>