<?php
if (!isset($_SESSION['idAdministrateur'])) {
    require('navbarLambda.php');
    }
else if (filter_var($_SESSION['idAdministrateur'], FILTER_VALIDATE_INT)) {
    require('navbarAdmin.php');
    }
else {
    require('navbarLambda.php');
    }?>