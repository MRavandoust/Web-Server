<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
 <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
    <section class="chat" id="chat">
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        // Récupération des 10 derniers messages
        $reponse = $bdd->query('SELECT * FROM coversation ORDER BY ID DESC ');

        // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
        while ($donnees = $reponse->fetch()) {
            echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
        }

        ?>
    </section>



    <section class="send">
        <form action="insertBD.php" method="POST" target="dummyframe">
            <input type="text" placeholder="Votre nome" name="pseudo" id="pseudo" />
            <input type="text" name="message" id="text" />
           <input type="submit" name="submit" value="send" id="submit" onkeyup="document.location.reload(true)" />
        </form>

        <script type="text/javascript">
        $("#submit").click(function() {
                $("#chat").load(" #chat");
            });
        </script>
    </section>





</body>

</html>