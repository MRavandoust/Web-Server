<?php session_start();
if ($_SESSION) {
    // header('Location:contacts.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoie_contact</title>
    <link rel="stylesheet" href="adminStyle.css">
</head>

<body>
    <h3>Qui voulez-vous contacter?</h3>
    <section class="cadre">
        <form class="myForm" method="POST">
            <table>
                <tr>
                    <th>Email</th>
                </tr>
                <tr>
                    <td><input type="text" name="email"></td>

                </tr>
                <tr>
                    <td><input type="submit" value="Valider" onclick="indique();"></td>
                    <script>
                        function indique() {
                            alert('Demande d\'envoie est réalisée avec succès!');
                        }
                    </script>

                </tr>
            </table>
        </form>

        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        if (isset($_POST['email'])) {
            $req = $bdd->prepare('UPDATE contact SET iscontacted = :iscontacted, contactdate = NOW() WHERE email = :email');
            $req->execute(array(
                'iscontacted' => true,
                'email' => $_POST['email']
            ));
            header('Location: contacts.php');
        }
        ?>

    </section>
</body>

</html>