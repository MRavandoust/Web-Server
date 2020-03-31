<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cible</title>
</head>
<body>
    <h3>Les resultat est ceci :</h3>

<?php 
echo '<p>Votr prenom ets ' . htmlspecialchars($_POST['prenom']) . '</p>';
if(isset($_POST['vegetarien']))
{
    echo '<p>Vous êtes vegetarien</p>';
}else
{
    echo '<p>Vous n\'êtes pas vegetarien. Vous mangez de la viande</p>';
}
echo '<p>Vous avez choisi le ' . $_POST['choix'] . '</p>';
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png' , 'pdf');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                    echo "L'envoi a bien été effectué !";
                }else{
                    echo '<p>Votre fichier n\'est pas autorisé à uploader</p>';
                }
        }
}
  ?>
</body>
</html>