<?php 
function catchGet(){
	$request = array(
		'page' => 'index',
		'filter' => 'all'
	);
	if (!empty($_GET)){

		if (isset($_GET['querying'])&&!empty($_GET['querying'])) {
			$request['page'] = explode('.',  $_GET['querying'])[0];
		}

		if (isset($_GET['filter'])) {
			$request['filter'] = explode('.',  $_GET['filter'])[0];
		} 
	}
	return $request;
}



?>