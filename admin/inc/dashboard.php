<link rel="stylesheet" href="../../css/style.css" type="text/css">
<?php session_start();
if($_SESSION['admin']=FILTER_VALIDATE_EMAIL) {
    require_once('../../navbarAdmin.php');
}
else {
    require_once('../../navbarLambda.php');
}


echo "Bonjour ", $_SESSION['admin'];

?>

