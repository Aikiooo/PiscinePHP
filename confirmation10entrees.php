<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="shortcut icon" href="./imgP/logoville.jpg">
    
    <title>Accueil</title>

<?php
if (!isset($_SESSION['idAdministrateur'])) {
    require('/Piscine/PiscinePHP/navbarLambda.php');
    }
else if (filter_var($_SESSION['idAdministrateur'], FILTER_VALIDATE_INT)) {
    require('/Piscine/PiscinePHP/navbarAdmin.php');
    }
else {
    require('/Piscine/PiscinePHP/navbarLambda.php');
    }
    ?>

