<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requete</title>
</head>

<body style="text-align: center">
    <h3>Le resultat</h3>

    <?php
    echo '<p>Bonjour Mme/M <strong>' . $_POST['name'] . '</strong> </P>';
    echo '<p>Votre demande a bien été enregistré </P>';
    echo '<p>Nous vous contacterons par email <strong>' . $_POST['email'] . '</strong> </P>';
    ?>


<form action="index.php" method="POST">
    <input type="submit" name="home" value="Retour à l'accueil"/>
    <input type="submit" name="prev" value="Page précédente"/>
</form>


</body>

</html>