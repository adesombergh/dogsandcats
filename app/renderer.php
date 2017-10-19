<?php
function render($demande,$liste,$post_result){
	$page = $demande['page'];
	$filtre = $demande['filter'];


	$$page = $liste;


	include_once('public/views/head.php');

	include_once('public/views/contents/'.$page.'_content.php'); 

	include_once('public/views/foot.php');
}
?>
