<?php
function render($demande,$requete,$post_result){
	$page = $demande['page'];
	$filtre = $demande['filter'];

	include_once('public/views/head.php');

	include_once('public/views/contents/'.$page.'_content.php'); 

	include_once('public/views/foot.php');
}
?>
