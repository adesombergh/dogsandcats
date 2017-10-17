<?php
include_once('tools.php');

$page = explode('.',  $_GET['q'])[0];

if (isset($_GET['filter'])) {
	$filter = explode('.',  $_GET['filter'])[0];
} else {
	$filter = "all";
}


include_once('post.php');
include_once('pager.php');

$result = catchPost();

render($page,$filter,$result);
?>
