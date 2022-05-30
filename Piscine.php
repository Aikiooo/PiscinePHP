<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="shortcut icon" href="./imgP/logoville.jpg">
    
    <title>Piscine</title>
    <?php
    
    if (session_status() === PHP_SESSION_ACTIVE) {
        require('navbarAdmin.php');
    }
    else {
        require('navbarLambda.php');
    }
      
        
    ?>
<head>
</head>

<body>

    <?php
        require_once('navbarLambda.php')
        
    ?>
    
    <h3>Pour se détendre après une journée intense <br />
        il y a de nombreuses piscines à Rennes </h3>
    <br />
    
    
    <section class="available py-5">
         <div class="container">
             <div class="row">
                 <div class="card mb-3 border-0 rounded-0">
                     <div class="row ">
                         <div class="col-md-6">
                             <img src="./imgP/piscineGayeulles.jpg" class="img-fluid" alt="...">
                         </div>
                         <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Piscine des Gayeulles</h5>
                                <p class="card-text">
                                    Bassin de 25 mètres, fosse de plongée de 10 mètres de profondeur, espace détente, 
                                    hammams, lagune pour les tout- petits et piscine à vagues. École municipale de natation : 
                                    cours collectifs à partir de la grande section de maternelle..
                                </p>
                                <p class="card-text"><a href="#" class="text-muted btn"> 16, avenue des Gayeulles 35000  Rennes</a></p>
                            </div>
                         </div>
                     </div>
                 </div>
                 <div class="card mb-3 border-0 rounded-0">
                     <div class="row ">
                         <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Piscine Saint Georges</h5>
                                <p class="card-text">
                                        Cette piscine couverte de style Art Deco est équipée d'un bassin de 33,33 m x 14 m.
                                        la Piscine St Georges de Rennes permet de nager dans une ambiance familiale.
                                        Plusieurs activités sont proposées dans cette piscine de Rennes : cours d'aquagym, cours de natation, etc. 
                                <p class="card-text"><a href="#" class="text-muted btn"> 2 Rue Gambetta 35000  Rennes</a></p>
                            </div>
                         </div>
                         <div class="col-md-6">
                             <img src="./imgP/PiscineSaintGeorges.jpg" class="img-fluid" alt="...">
                         </div>
                     </div>
                 </div>
                 <div class="card mb-3 border-0 rounded-0">
                    <div class="row ">
                        <div class="col-md-6">
                            <img src="./imgP/PiscineVillejean1.jpg" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Piscine de Villejean</h5>
                            <p class="card-text">
                                    Un bassin de 25 x 12,50 mètres,
                                    Un plus petit bassin de 15 x 10 mètres.
                                    Cette piscine municipale est le lieu idéal pour faire quelques longueurs et améliorer ses techniques de nage.
                                    séances de bébés nageurs, des cours de natation, du water-polo, etc.
                            </p>
                            <p class="card-text"><a href="#" class="text-muted btn"> 1 Square d'Alsace 35000  Rennes</a></p>
                        </div>
                        </div>
                    </div>
                 </div>
             </div>
        </div>
             </div>
        </section> 
    <divo>

    <p>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
        <h1>
        <br />
        <br />
        Pour se détendre après une journée intense ou simplement pour s'amuser un peu, aller à la piscine peut faire beaucoup de bien. Et cela tombe plutôt pas mal, il y a de nombreuses piscines à Rennes ! 
        </h1>
    </p>
    </divo>
    <br />
    <br />
        <divo>
        <h3>Les différentes piscines</h3>
        <p>
            Il y a quatres piscines a Rennes :
            <br>
            -La piscine Saint-Georges
            <br>
            -La piscine des Gayeulles
            <br>
            -La piscine de Villejean
            <br>
            -La piscine de Bréquiny

        </p>
        </divo>
    <br />
    <br />
    <divo>
        <p>
        <h2>Piscine de Bréquiny</h2>
        <br>
        <img src="./imgP/photopiscinebreq.jpg" alt="">
        <br>
        <br>
        <h2>Piscine des Gayeulles</h2>
        <br>
        <img src="./imgP/piscineGayeulles.jpg" alt="">
        <br>
        <br>
        <h2>Piscine Saint Georges</h2>
        <br>
        <img src="./imgP/PiscineSaintGeorges.jpg" alt="">
        <br>
        <br>
        <h2>Piscine de Villejean</h2>
        <br>
        <img src="./imgP/PiscineVillejean1.jpg" alt="">
        <br>
        <br>
    </p>
    </divo>

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