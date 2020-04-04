<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }


    if (isset($_POST['pseudo']) && isset($_POST['message'])) {
        $req = $bdd->query('INSERT INTO coversation (pseudo, message) VALUES( "' . $_POST['pseudo'] . '" , "' . $_POST['message'] . '")');
    }
    ?>