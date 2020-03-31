<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>

<body>
    <h3>Prendre l'information depuis un formulaire</h3>

    <form action="cible.php" method="POST" enctype="multipart/form-data">
        <p><label>Prenome : <input type="text" name="prenom"></label></p>
        <p><label>Vous êtes vegetarien <input type="checkbox" name="vegetarien" value="oui"></label></p>
        <p><label>Votre Choix : <select name="choix">
                <option value="choix1">Choix 1</option>
                <option value="choix2">Choix 2</option>
                <option value="choix3">Choix 3</option>
                <option value="choix4">Choix 4</option>
            </select></label></p>
            <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
        </p>
        <input type="submit" value="Envoyer le fichier" />
    </form>
</body>

</html>