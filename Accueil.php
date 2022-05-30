<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="./imgP/logoville.jpg">

    <title>Accueil</title>
    <?php

    # Il faut débuter par un session start sur chaque page nécéssitant une connexion
    # Ici elle continue la session existante si l'admin s'est connecté, autrement elle en génère une nouvelle
    session_start();
    # Ce if vérifie si la session idAdministrateur existe pas, auquel cas elle affiche la navbarLambda
    if (!isset($_SESSION['idAdministrateur'])) {
        require('navbarLambda.php');
    }

    # Elle vérifie ensuite que la valeur de l'admin est bien un int, auquel cas elle affiche la navbarAdmin
    else if (filter_var($_SESSION['idAdministrateur'], FILTER_VALIDATE_INT)) {
        require('navbarAdmin.php');
    }

    # Si la session idAdministrateur existe mais qu'elle n'est pas un int, alors elle affiche la navbarLambda
    else {
        require('navbarLambda.php');
    }


    ?>

    <head>
    </head>

<body>


    <divo>

        <p>
            <br />
            <br />
            <br />
            <br />
        <h2>
            <br>
            <br>
            Où nager, quel jour et à quelle heure à Rennes et dans la métropole ? <br />
            Tous les horaires d'ouverture des piscines et de leurs bassins.
            <br>
            <br>

        </h2>
        </p>
    </divo>
    <divo>
        <p>
            <img src="./imgP/photoFamille.png" alt="">
        </p>
    </divo>
    <br>
    <br>
    <divo>
        <h3>Conditions d'accès (Covid)</h3>
        <p>
        <h3>
            L'accès aux <strong>piscines de Rennes</strong> est désormais conditionné à la détention <a href="https://www.gouvernement.fr/info-coronavirus/pass-sanitaire" target="_blank" title="pass sanitaire : définition (nouvelle fenêtre)" rel="noopener noreferrer">pass sanitaire</a> valide, et ce dès l'âge de 12 ans et 2 mois. les règles sanitaires en cours restent en vigueur (distanciation physique, lavage des mains..).
        </h3>
        </p>
        <br>
        <br>
        <divo>
            <p>
                <img src="./imgP/photopass.jpg" alt="">
            </p>
        </divo>
        <br>
        <br>
        <p>
            <img src="./imgP/CaptureHoraires.png" alt="">
        </p>
    </divo>
    <br>
    <br>
    <br>
    <br>
    <br>

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