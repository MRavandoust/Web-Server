<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
    }catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    

$req = $bdd->prepare('INSERT INTO coversation (pseudo, message) VALUES( ? , ?)');
$req->execute(array($_POST['pseudo'] , $_POST['message']));
?>