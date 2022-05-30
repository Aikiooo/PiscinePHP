<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
    <title>Document</title>
</head>

<body>
    <div id="container">
        <!-- zone de connexion -->

        <?php
        if (!isset($_SESSION['idAdministrateur'])) {
            require('navbarLambda.php');
        } else if (filter_var($_SESSION['idAdministrateur'], FILTER_VALIDATE_INT)) {
            require('navbarAdmin.php');
        } else {
            require('navbarLambda.php');
        } ?>

        <?php include_once "admin/inc/script_login.php" ?>
        <?php if (isset($erreur)) {
            echo $erreur;
        } ?>

        <!-- <form action="" method="POST">
                <h1>Connexion</h1>
                
                <label for="mdp">Mot de passe</label> : <br /><input type="text" placeholder="Entrer votre mot de passe" name="mdp" /><br /><br />

                <input type="submit" id='submit' value='LOGIN' >

            </form> -->

        <form action="" method="post">
            <input class="" type="text" name="id" placeholder="ID">
            <input class="" type="password" name="password" placeholder="Mot de passe">
            <button class="buttoncenter" type="submit" name="submit"> Se connecter </button>
        </form>



    </div>
</body>

</html>