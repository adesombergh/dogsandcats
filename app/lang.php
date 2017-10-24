<?php
function setLang($lang){
	putenv("LANG=".$lang);
	setlocale(LC_ALL, $lang);

	$domain = "messages";
	bindtextdomain($domain, "public/lang");
	textdomain($domain);

}

?>