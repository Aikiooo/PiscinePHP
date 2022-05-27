<?php
# Ce code permet de se déconnecter, en supprimant la session
sleep(2);
session_start();
session_destroy();
$_SESSION = NULL;
header("Location:http://localhost/Piscine/PiscinePHP/Accueil.php");
?>