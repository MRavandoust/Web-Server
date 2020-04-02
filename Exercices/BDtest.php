<?php 
$connect = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
$reponse = $connect-> query('SELECT * FROM utilisateurs');
while($donnee = $reponse-> fetch())
{
    echo '<p>' . $donnee['email'] . '</p>';
}




?>


