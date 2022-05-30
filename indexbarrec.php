<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="shortcut icon" href="./imgP/logoville.jpg">
    
    <title>Tester un code</title>
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
    <p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
</p>
<p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h5 class="top-margin">Venez nager  : <a href="https://waytolearnx.com/2019/07/generateur-de-code-barre-en-php.html" target="_blank">Code barre pour votre abonnement </a></h5>
            </div>
        </div>

        <form class="form-horizontal" method="POST" id="barcode">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tapez votre code ici :</label>
                        <input type="text" name="string" class="form-control" value="">
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-6">
                    <input type="submit" name="submit" class="btn btn-success text-center form-controll" id="" value="Generate Barcode">
                    <?php
						if(isset($_POST['submit'])) {
						   $string = trim($_POST['string']);
						   if($string != '') {
							  echo '<h6>Generated Barcode</h6>';
							  echo "<center><img alt='testing' src='barcode.php?codetype=code39&size=50&text=".$string."&print=true'/></center>";  
						   } else {
							   echo "S'il vous plaît entrer un code!";
						   }
						}
					?>
                </div>
            </div>
        </form>
    </div>
    <p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</p>
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