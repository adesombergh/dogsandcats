<?php 
function catchGet(){
	$request = array(
		'page' => 'index',
		'filter' => 'all',
		'lang' => 'fr'
	);
	if (!empty($_GET)){

		if (isset($_GET['querying'])&&!empty($_GET['querying'])) {

			if ( sizeOf(explode('/', $_GET['querying'])) > 2 ) {
				$request['page'] = '404';
			} else {
				if (sizeOf(explode('/', $_GET['querying'])) == 2) {
					$request['lang'] = explode('/',  $_GET['querying'])[0];
					$file = explode('/',  $_GET['querying'])[1];
					$request['page'] = explode('.',  $file)[0];
				} else {
					$request['lang'] = 'fr';

					$request['page'] = explode('.',  $_GET['querying'])[0];
				}
			}

		}

		if (isset($_GET['filter'])) {
			$request['filter'] = explode('.',  $_GET['filter'])[0];
		} 
	}

	return $request;
}



?>