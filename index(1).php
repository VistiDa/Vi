<?php
if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('vue/vue_accueil.php');
}
else{
	if ($_GET['section'] == 'recherche') {
		include_once('controleur/recherche.php');
	}
}


?>