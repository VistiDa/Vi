<?php
// Récupère les infos de la page web
$rec = $_POST['terme']; 
header("location:http://www.allocine.fr/recherche/?q=$rec");
?>