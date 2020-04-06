<?php session_start(); 
if($_SESSION){
    header('Location:contacts.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
    <link rel="stylesheet" href="adminStyle.css">
</head>

<body>
    <h3>Espace d'administrateur</h3>
    <section class="cadre">
        <form class="myForm" method="POST">
            <table>
                <tr>
                    <th>Identifiant</th>
                </tr>
                <tr>
                    <td><input type="text" name="identifiant"></td>

                </tr>
                <tr>
                    <th>Mot de pass</th>
                </tr>
                <tr>
                    <td><input type="password" name="password"></td>

                </tr>
                <tr>
                    <td><input type="submit" value="Valider"></td>

                </tr>
            </table>
        </form>

<?php 
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root' , '');
if(isset($_POST['identifiant']) && isset($_POST['password'])){

    $repons = $bdd->query('SELECT * FROM `admins` WHERE `identifiant` LIKE "'.$_POST['identifiant'].'" AND `password` LIKE "'.$_POST['password'].'"');
    $donnee=$repons->fetch();
    if($donnee['identifiant']==$_POST['identifiant'] && $donnee['password']==$_POST['password']){
        $_SESSION['username'] = $_POST['identifiant'];
        header('Location:contacts.php');

    }else{
        echo "Identifiant ou mot de pass est erronné";
    }

    }
?>

    </section>
</body>

</html>