<?php
// OUTILs pour débuguer
include_once 'tools.php';

// CONFIGURATION de la Base de donnée.
include_once 'database/db.php';

// Remplissage automatique de la base de donnée avec des trucs bidons.
include_once 'database/seeder.php';

// TRAITEMENT DES REQUETES GET.
include_once 'app/get_actions.php';
$getResults = catchGetAction();

// TRAITEMENT DES REQUETES POST.
include_once 'app/post_actions.php';
$postResults = catchPostAction();

// GENERATEUR DES PAGES.
include_once 'app/renderer.php';
render( $getResults, $postResults );

?>
