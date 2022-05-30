<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="shortcut icon" href="./imgP/logoville.jpg">
    
    <title>Piscine</title>
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

<head>
</head>

<body>

    <?php
        require_once('navbarLambda.php')
        
    ?>
    <divo>

    <p>
    <br/><br/><br/><br/>
        <h1><br/><br/>Tarifs préférentiels </h1>
    </p>
    </divo>
    <br/>
    <br/>
        <divo>
        <h3>Grille de tarifs</h3>
        <p>
        <br>
        <img src="/Piscine/PiscinePHP/imgP/tarif18ans.png" alt="">
        <a href="/Piscine/PiscinePHP/confirmation10entrees.php"><img src="/Piscine/PiscinePHP/imgP/tarifadulte.png" alt=""></a>


        <br>
        <br>
        </p>
        </divo>
    <br/>
    <br/>


</body>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Accessibilité</h3>
                        <ul>
                            <li><a href="#">Nous contacter</a></li>
                            <li><a href="#">Plan du site</a></li>
                            <li><a href="#">Rennes métropole</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>A propos</h3>
                        <ul>
                            <li><a href="#">Données personnelles</a></li>
                            <li><a href="#">Mentions légales</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Rennes métropole</h3>
                        <p>Hôtel de Rennes métropole 4, avenue Henri Fréville CS 93111 35031 Rennes Cedex
                        </p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Rennes métropole © 2022</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>