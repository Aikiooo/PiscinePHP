<?php $host = "localhost";
$dbname="piscine";
$admin = "adminSIO";
$pass = "toto"; 

try{ 
    $pdo = new PDO("mysql: host=$host; dbname=$dbname", $admin, $pass); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }catch(PDOException $e) { 
        
        die(print_r("Erreur bdd : ".$e->getMessage()));
    
    }
