<?php
require('bootstrap.php');
		
$req = $connexion->prepare("SELECT * FROM etudiants");
$req->execute();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body>
        <h1>Create Retreive Update Delete</h1>
        <h2>Ajout d'une entrée</h2>
        <form method="post" action="ajouter.php">
            <p>Civilité: <input type="text" name="civilite" /></p>
            <p>Prénom:   <input type="text" name="prenom"   /></p>
            <p>Nom:      <input type="text" name="nom"      /></p>
            <p><input type="submit" name="envoyer" value="Ajouter" /></p>
        </form>
        <h2>Liste des entrées</h2>
        <table border="1">  
            <tr>
                <th>Civ</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php
                while($ligne = $req->fetch(PDO::FETCH_OBJ)) {
                    echo "<tr>";
                    echo "<td>".filter_var($ligne->civilite,FILTER_SANITIZE_STRING)."</td>";
                    echo "<td>".filter_var($ligne->prenom,  FILTER_SANITIZE_STRING)."</td>";
                    echo "<td>".filter_var($ligne->nom,     FILTER_SANITIZE_STRING)."</td>";
                    echo "<td><a href='modifier.php?id=". filter_var($ligne->id,FILTER_SANITIZE_NUMBER_INT)."'>modifier</a></td>";
                    echo "<td><a href='supprimer.php?id=".filter_var($ligne->id,FILTER_SANITIZE_NUMBER_INT)."' onclick='return confirm(\"Etes vous sur ?\")'>supprimer</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
