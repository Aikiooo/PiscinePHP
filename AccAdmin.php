<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <link rel="shortcut icon" href="./imgP/logoville.jpg>
    
    <title>Accueil</title>
<head>
</head>

<body>
    <?php
    session_start();
    if(session_id('admin')) {
        require_once('navbarAdmin.php');
    }
    else {
    require_once('navbarLambda.php.php');
    }

        
        
    ?>
    
</body>
</html>