<?php
/*
* PRE-REQUIS
*/
// VARIABLES de configuration.
include_once 'app/config.php';

// OUTILs pour débuguer
include_once 'tools.php';

// Remplissage automatique de la base de donnée avec des trucs bidons.
include_once 'database/seeder.php';

/*
* DEBUT DE LA MAGIE
*/
// TRAITEMENT DE L'URL.
include_once 'app/traitementUrl.php';
$demande = traitementUrl();

include_once 'app/lang.php';
setLang($demande['lang']);

// TRAITEMENT DES REQUETES GET.
include_once 'app/faireDemande.php';
$liste = faireDemande($demande);

// TRAITEMENT DES REQUETES POST.
include_once 'app/post_actions.php';
$postResults = catchPostAction();

// GENERATEUR DES PAGES.
include_once 'app/renderer.php';
render( $demande, $liste, $postResults );





?>