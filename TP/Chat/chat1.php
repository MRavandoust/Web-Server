<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="chat">
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


if(isset($_POST['pseudo']) && isset($_POST['pseudo']) && isset($_POST['message'])){
$req = $bdd->query('INSERT INTO coversation (pseudo, message) VALUES( "'.$_POST['pseudo'].'" , "'.$_POST['message'].'")');
}


        // Récupération des 10 derniers messages
        $reponse = $bdd->query('SELECT * FROM coversation ORDER BY ID DESC LIMIT 0, 100');

        // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
        while ($donnees = $reponse->fetch()) {
            echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
        }

        ?>

    </section>


    <section class="send">
        <form  method="POST">
            <input type="text" placeholder="Votre nome" name="pseudo" id="pseudo" />
            <input type="text" name="message" id="text" />
            <input type="submit" name="submit" value="send" id="submit" onsubmit="document.getElementById('pseudo').disabled = true">
        </form>



    </section>



</body>

</html>