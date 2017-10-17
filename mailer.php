<?php 
function mail_master()
{
	if (mailCheck()) {
		secureMail();
		$sent = sendmail($_POST['nom'],$_POST['email'],$_POST['msg']);
		if ($sent) {
			$status['status'] = 'success';
			$status['message'] = "Mail envoyé avec succès! Merci pour votre message je répondrai au plus vite.";
		} else {
			$status['status'] = 'failed';
			$status['message'] = "Oops, y'a un problème inconnu pour envoyer ce mail";
		}
	} else {
		$status['status'] = 'failed';
		$status['message'] = "<strong>Oops,</strong> il faut corriger quelque chose";
	}
	return $status;
	
}


function mailCheck()
{
	if (!empty($_POST['msg'])&&!empty($_POST['email'])&&!empty($_POST['nom'])) {
		return true;
	} else {
		return false;
	}
}

function secureMail()
{
	$_POST['msg'] = htmlspecialchars($_POST['msg']);
	$_POST['nom'] = htmlspecialchars($_POST['nom']);
}



function sendmail($name,$email,$msg)
{
	$headers = 'From: mailer@my.cv' . "\r\n" .
	'Reply-To: '.$email . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	return mail("aldebaran.desombergh@gmail.com", $name. " Sent you a Mail From CV-Site", $msg, $headers);
}
 ?>