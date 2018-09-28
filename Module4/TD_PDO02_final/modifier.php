<?php
require('bootstrap.php');

//recuperation des infos de l'individu
$req = $connexion->prepare("SELECT * FROM etudiants WHERE id=:id");
$id  = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$req->bindParam(':id', $id); 
$req->execute();
$etudiant = $req->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body>
        <h1>Create Retreive Update Delete</h1>
        <h2>Modification d'une entrée</h2>
        <form method="post" action="enregistrer.php">
            <p>Civilité: <input type="text" name="civilite" value="<?php echo filter_var($etudiant->civilite,FILTER_SANITIZE_STRING) ;?>"   /></p>
            <p>Prénom:   <input type="text" name="prenom"   value="<?php echo filter_var($etudiant->prenom,  FILTER_SANITIZE_STRING) ;?>"   /></p>
            <p>Nom:      <input type="text" name="nom"      value="<?php echo filter_var($etudiant->nom,     FILTER_SANITIZE_STRING) ;?>"   /></p>
            <input type="hidden" name="id" value="<?php echo $etudiant->id  ;?>" />
            <p><input type="submit" name="envoyer" value="Modifier" /></p>
        </form>
    </body>
</html>
