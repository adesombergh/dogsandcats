<?php
function render($get,$request_result){
	$page = $get['page'];
	$filtre = $get['filter'];

	include_once('public/views/head.php');

	include_once('public/views/contents/'.$page.'_content.php'); 

	include_once('public/views/foot.php');
}
?>
