<?php
// Initialiser la session
session_start();
 
// Désactiver toutes les variables de session
$_SESSION = array();
 
// Détruire la session.
session_destroy();
 
// Rediriger vers la page de connexion
header("location: mainpage.php");
exit;
?>