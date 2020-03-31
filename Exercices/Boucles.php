<?php
$repetition = 0;

while($repetition <10 )
{
    echo "C'est la " . $repetition .  ' eme fois que vous imprimez cette phrase.<br> ';
    $repetition++;
}

?>


<?php
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
?>