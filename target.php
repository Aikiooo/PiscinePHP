    ?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=Piscine;charset=utf8', 'adminSIO', 'toto');
}

catch(Exception $e) {
    die('erreur :'.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO `admin`(prénom, nom, mdp, `e-mail`, adresse, numTel) VALUES(?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['prénom'], $_POST['nom'], $_POST['mdp'], $_POST['`e-mail`'], $_POST['adresse'], $_POST['numTel']));

    echo "<span class=homepagetext style=background-color:#ffffff00;>Bonjour ".$_POST["prénom"]."</span>";
    echo "<span class=homepagetext style=background-color:#ffffff00;><br>Votre inscription en temps qu'admin à bien été enregistré. Vous pouvez à présent vous connecter au site.</span>";
    
?>