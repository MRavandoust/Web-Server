<?php
// La fonction array permet de créer un array
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
?>

<?php
$prenoms[0] = 'François';
$prenoms[1] = 'Michel';
$prenoms[2] = 'Nicole';
?>

<?php
echo $prenoms[1] . '<br>';
?>
<br /><br />

<?php
                                            //Construire un tableau associatif
// On crée notre array $coordonnees
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');
?>

<?php
echo $coordonnees['ville'] . '<br>';
?>
<br /><br />

<?php
// On crée notre array $prenoms
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît' , 'Masoud');

// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 6; $numero++)
{
    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
?>

<br /><br />

<?php
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît' , 'Masoud' , 'Soma');

foreach($prenoms as $element)
{
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
?>

<br /><br />

<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $element)
{
    echo $element . '<br />';
}
?>

<br /><br />

<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}
?>



<br /><br />

<h3> Afficher rapidement un array avec   "print_r"  </h3>

<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

echo '<pre>';
print_r($coordonnees);
echo '</pre>';
?>

<br /><br />

<h1>Rechercher dans un tableau</h1>

<br />

<h3> Vérifier si une clé existe dans l'array avec la function: "array_key_exists" </h3>

<?php
$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees))
{
    echo 'La clé "nom" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !';
}

?>


<br /><br />
<h3> Vérifier si une valeur existe dans l'array : "in_array" </h3>

<?php
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}
?>


<br /><br />
<h3> Récupérer la clé d'une valeur dans l'array : "array_search" </h3>

<?php

$fruits = array('Banane' , 'Pomme' , 'Poire' , 'Cerise' , 'Fraise' , 'Framboise');

$position = array_search('Fraise' , $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br>';


$position = array_search('Banane' , $fruits);
echo '"Banane" se trouve en position ' . $position ;

?>


