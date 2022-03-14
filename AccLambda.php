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
    session_start();
    if(session_id('admin')) {
        require_once('navbarAdmin.php');
    }
    else {
    require_once('navbarLambda.php');
    }

        
        
    ?>
<head>
</head>

<body>
    <?php
        require_once('navbarLambda.php')
    ?>
    <p>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
        <div>
        <h1>
        <br />
        <br />
    Où nager, quel jour et à quelle heure à Rennes et dans la métropole ? Tous les horaires d'ouverture des piscines et de leurs bassins.
        </h1>
        </div>
    </p>
    <br />
    <br />
        <div>
        <h3>Conditions d'accès (Covid)</h3>
        <p>
            L'accès aux <strong>piscines de Rennes</strong> est désormais conditionné à la détention <a href="https://www.gouvernement.fr/info-coronavirus/pass-sanitaire" target="_blank" title="pass sanitaire : définition (nouvelle fenêtre)" rel="noopener noreferrer">pass sanitaire</a> valide, et ce dès l'âge de 12 ans et 2 mois. les règles sanitaires en cours restent en vigueur (distanciation physique, lavage des mains..).
        </p>
        </div>
    <br />
    <br />
    <div>
    <img src="./imgP/CaptureHoraires.png" alt="">
    </div>

</body>
<footer>
</footer>
<script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- <div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Réservation 
    </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="onglet4.php">Réservation en ligne</a></li>
            <li><a class="dropdown-item" href="onglet3.php">Stock en direct</a></li>
        </ul> 
    </div> -->
    


<!--<footer class="bg-secondary">
    <div class="containeur">
        <div class="row">
            <div class="col">
                <h1 class="text-white text capitalize font-weight-light p-3">open anchor company<h1>
                <h3 class="text-light font-weight font italic mb-3">Ouvert tout les jours</h3>
            </div>
        </div>
    </div>     
</footer>-->
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</html>
