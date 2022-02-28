<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', '');
}

catch(Exception $e) {
    die('erreur :'.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO `admin`(mdp, nom, prénom, `e-mail`, adresse, numTel) VALUES(?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['mdp'], $_POST['nom'], $_POST['prénom'], $_POST['`e-mail`'], $_POST['adresse'], $_POST['numTel']));

    echo "<span class=homepagetext style=background-color:#ffffff00;>Bonjour ".$_POST["prénom"]."</span>";
    echo "<span class=homepagetext style=background-color:#ffffff00;><br>Votre inscription en temps qu'admin à bien été enregistré. Vous pouvez à présent accèder au site.</span>";
    
?>