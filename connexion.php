<?php 
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 
    try{
    //On établit la connexion
    $conn = new PDO("mysql:host=$servername;dbname=socialnetwork", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
    }

    /*On capture les exceptions si une exception est lancée et on affiche
    *les informations relatives à celle-ci*/
    catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }
?>