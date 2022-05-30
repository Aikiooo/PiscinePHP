<?php
if(isset($_POST['submit'])){
    if(isset($_POST['id']) and !empty($_POST['id'])){
        if(filter_var($_POST['id'], FILTER_VALIDATE_INT)){
            if(isset($_POST['password']) and !empty($_POST['password'])){

                require "server.php";

                $password = sha1($_POST['password']);

                $getdata = $pdo->prepare("SELECT username FROM admin WHERE id=? and password=?");
                $getdata ->execute(array($_POST['id'], $password));
                

                $rows = $getdata->rowCount();

                if($rows==true){
                    session_start();
                    $_SESSION['idAdministrateur'] = $_POST['id'];
                    header("Location:admin/inc/dashboard.php");
                        
                    }else{
                        $erreur ="id ou mot de passe inconnu";
                    }
                    
                }else{                        
                        $erreur = "Veuillez saisir votre mot de passe";
                }
            
            }else{
                require "server.php";
                $idErreur = $_POST['id'];

                $sql = "INSERT INTO erreur (id, username, password) VALUES (NULL,?,NULL)";
                $sendErreur = $pdo->prepare($sql);
                $sendErreur->execute([$idErreur]);
                $erreur = "Veuillez saisir un identifiant valide";
            }
        
        }else{

            $erreur = "Veuillez saisir un id";        
        }
    }
?>