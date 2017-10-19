<?php 
function dd($var)
{
	dump($var);
	die();
};

function dump($var)
{
	echo "<pre>";
	print_r($var);
	echo "</pre>";
};
 ?>