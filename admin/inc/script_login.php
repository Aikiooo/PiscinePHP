<?php
session_start();

if(isset($_POST['submit'])){
    if(isset($_POST['idAdmin']) and !empty($_POST['idAdmin'])){
        if(filter_var($_POST['idAdmin'], FILTER_VALIDATE_INT)){
            if(isset($_POST['mdp']) and !empty($_POST['mdp'])){

                require "server.php";

                $password = sha1($_POST['mdp']);

                $getdata = $pdo->prepare("SELECT `e-mail` FROM admin WHERE idAdmin=? and mdp=?");
                $getdata ->execute(array($_POST['idAdmin'], $password));
                
                $rows = $getdata->rowCount();

                if($rows==true){
                    $_SESSION['admin']=$_POST['idAdmin'];
                    header("Location:admin/inc/dashboard.php");
                        
                    }else{
                        $erreur ="idAdmin ou mot de passe inconnu";
                    }
                    
                }else{                        
                        $erreur = "Veuillez saisir votre mot de passe";
                }
            
            }else{
                $erreur = "Veuillez saisir un email valide";
            }
        
        }else{
            $erreur = "Veuillez saisir un idAdmin";        
        }
    }
?>