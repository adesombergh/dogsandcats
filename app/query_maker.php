<?php 
function makeQuery($query)
{
	if ($query['page']=="dogs") {
		include_once 'database/dogs.php';
		$result = dogQuery($query['filter']);
	}
	return $result;
}


 ?>