<?php 
session_start();
try{
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

if (isset($_POST['name']) and isset($_POST['email'])){
  // $bdd->query('INSERT INTO `contact`( `name`, `email`, `requestdate`) VALUES ("'.$_POST["name"].'" , "'.$_POST["email"].'" , NOW())');

   $req = $bdd->prepare('INSERT INTO contact(name, email, requestdate) VALUES(:name, :email, NOW())');
$req->execute(array(
    'name' => $_POST["name"],
    'email' => $_POST["email"]));
}
 ?>

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
    <input type="submit" name="prev" value="Accueil"/>
</form>


</body>

</html>