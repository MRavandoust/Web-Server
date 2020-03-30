<?php
$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);
 
 
echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;
?>

<br><br>
<h2>"strlen": longueur d'une chaîne</h2>
<?php 

$phrase = 'Bonjour tout le monde. Ceci est un message de ministre de la santé';

$longueur = strlen($phrase);
echo $phrase . '<br>';
echo 'La longueur de la phrase est ' . $longueur . 'caracters. <br>';

?>

<br><br>
<h2>"str_replace" : rechercher et remplacer</h2>

<?php
$ma_variable = str_replace('b', 'p', 'bim bam boum');
 
echo $ma_variable;
?>

<br><br>
<h2>"str_shuffle" : mélanger les lettres</h2>

<?php
$chaine = 'Cette chaine va etre melangee !';
$chaine1 = str_shuffle($chaine);
 
echo $chaine . '<br>';
echo $chaine1;
?>


<br><br>
<h2>"strtolower": écrire en minuscules</h2>

<?php
$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
$chaine1 = strtolower($chaine);
 
echo $chaine . '<br>';
echo $chaine1;
?>

<br><br>
<h2>"Récupérer la date</h2>

<?php
// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;
?>

<br><br>
<h2>Créer ses propres fonctions</h2>




