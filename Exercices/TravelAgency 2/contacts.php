<?php session_start();
if (!$_SESSION) {
    header('Location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacts</title>
        <style>
            table {
                margin: auto;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
                border: 1px solid;
                width: 735px;
            }

            table tr {
                width: 100%;
            }

            table tr th {
                padding: 5px 8px;
                background-color: rgb(192, 245, 122);
            }

            table tr td {
                padding: 5px 8px;
                background-color: antiquewhite;
            }

            h3 {
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 22px;

            }

            a {
                margin: auto;
                width: 100px;
                height: 20px;
                padding: 10px;
                background-color: rgb(100, 100, 247);
                color: white;
                text-decoration: none;
                margin-left: 40px;
            }

            thead {
                display: inline-block;
                height: 28px;
               width: 100%;
                
            }

            thead tr {

               width: 100%;
                
            }

            tbody {
                height: 309px;
                display: inline-block;
                overflow: auto;
                width: 100%;
                
            }
        </style>
    </head>

    <body>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $repons = $bdd->query('SELECT * FROM contact ORDER BY requestdate DESC');
    ?>
    <h3>Liste des personnes à contacter</h3>
 
    <table>
        <thead>
        <tr>
            <th style="width: 110px">Name</th>
            <th style="width: 180px">Email</th>
            <th style="width: 130px">Date de demande</th>
            <th style="width: 70px">Contacté</th>
            <th style="width: 150px">Date de contact</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($donn = $repons->fetch()) { ?>
            <tr>
                <td style="width: 110px"><?= $donn['name'] ?></td>
                <td style="width: 180px"><?= $donn['email'] ?></td>
                <td style="width: 130px"><?= $donn['requestdate'] ?></td>
                <td style="width: 70px"><?php if($donn['iscontacted'] == false)echo 'None'; else echo 'Oui';?></td>
                <td style="width: 130px"><?= $donn['contactdate'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>


        <div style="text-align: center; margin-top:20px;" id="div">
            <a href="index.php">Accueil</a>
            <a href="envoie_contact.php" id="gg">Envoie contact</a>
        </div>

        <?php 
            $repons1 = $bdd->query('SELECT * FROM contact');
            while($donn1 = $repons1->fetch()){
            if($donn1['iscontacted'] == false){ ?>
            <script>
            document.getElementById("div").children[1].style.display="inline-block";
            </script>
           <?php }else{?>
            <script>
           document.getElementById("div").children[1].style.display="none";
            </script>
            <?php }} 
        ?>

            
    
    </body>
</html>