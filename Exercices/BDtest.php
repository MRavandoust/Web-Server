<?php 
$connect = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $connect->query('SELECT * FROM visite');
while($donnee = $reponse-> fetch())
{
    echo '<p>' . $donnee['email'] . '</p>';
}
?>

