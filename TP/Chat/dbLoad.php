<?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        // Récupération des 10 derniers messages
        $reponse = $bdd->query('SELECT * FROM coversation ORDER BY ID DESC LIMIT 0, 100');

        // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
        while ($donnees = $reponse->fetch()) {
            echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
        }

        ?>
