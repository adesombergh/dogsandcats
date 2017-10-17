<?php 
function catchPost(){
	if (!empty($_POST))
	{

		if (isset($_POST['action'])&& $_POST['action']==="sendmail" ) {
			include_once('mailer.php');
			return mail_master();
		}

	}
}
 ?>