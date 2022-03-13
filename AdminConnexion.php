
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <title>Document</title>
</head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="target1.php" method="POST">
                <h1>Connexion</h1>
                
                <label for="mdp">Mot de passe</label> : <br /><input type="text" placeholder="Entrer votre mot de passe" name="mdp" /><br /><br />

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>
