<?php

$age = 17;
if($age < 12)
{
    echo 'Vous etes un enfant.';
} elseif ($age > 12 && $age < 18)
{
    ?>
    <h1><?php echo 'Vous etes un adolescent';?> </h1>
    <?php
}else 
{
    echo 'Vous etes un adult';
}

?>


<?php 

$note = 18;

switch($note)
{
    case 17:
        echo ' Vous avez eu 17';
    break;
    case 18:
        echo 'Vous avez eu 18';
    break;
}


?>

<br>
<?php
$autorisation_entrer = false;

if (! $autorisation_entrer)
{
echo 'Vous ne pouvez pas entrer';
}
?>