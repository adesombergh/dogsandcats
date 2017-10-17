<?php
function render($request,$query,$post_result){
	$page = $request['page'];
	$filtre = $request['filter'];

	include_once('public/views/head.php');

	include_once('public/views/contents/'.$page.'_content.php'); 

	include_once('public/views/foot.php');
}
?>
