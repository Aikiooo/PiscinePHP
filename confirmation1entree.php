<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="./imgP/logoville.jpg">


    <?php
    if (!isset($_SESSION['idAdministrateur'])) {
        require('navbarLambda.php');
    } else if (filter_var($_SESSION['idAdministrateur'], FILTER_VALIDATE_INT)) {
        require('navbarAdmin.php');
    } else {
        require('navbarLambda.php');
    } ?>




    <head>
    </head>

<body>
    <divo>


        <br /><br /><br /><br />
        <h2>
            <br><br>




            Confirmez-vous l'achat d'une place ?<br>

            <br>
            <form method="post">
                <button type="submit" name="button1" class="btn btn-primary btn-lg">Acheter pour 4€</button>
            </form>
            </h4>
            <p>
                <?php
                if (array_key_exists('button1', $_POST)) {
                    button1();
                }
                function button1()
                {

                    #get date of reservation in format YYYY-MM-DD
                    $date = getdate();
                    $date = date("Y-m-d");

                    #make a code generation in php of 8 characters with at least 1 uppercase letter, 1 lowercase letter and 1 number
                    $code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
                    echo nl2br("Votre achat est confirmé, voici votre code de réservation : \n\n $code");

                    #insertion of the code in the database
                    require "admin/inc/server.php";


                    $code10 = "INSERT INTO abonne (code, type_abonnement_id, piscine_id, date_abonnement, nb_places_restantes, actif) VALUES (?,?,?,?,?,?)";
                    $sendErreur = $pdo->prepare($code10);
                    $sendErreur->execute([$code, '2', '1', $date, '1', '1']);
                }
                ?>
            </p>

            <br><br><br><br><br><br><br><br><br><br>

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