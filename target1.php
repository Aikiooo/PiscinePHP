<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



try {
    $bdd = new PDO('mysql:host=localhost;dbname=Piscine;charset=utf8', 'adminSIO', 'toto');
}

catch(PDOException $e) {
    die('erreur :'.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO `admin`(mdp) VALUES(?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['mdp'],));

    echo "<span class=homepagetext style=background-color:#ffffff00;><br>Vous êtes connécté(e) en tant qu'Admin.</span>";
    
?>
</body>
</html>