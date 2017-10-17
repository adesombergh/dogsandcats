<?php 
function dd($var)
{
	dump($var);
	die();
};

function dump($var)
{
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
};
 ?>