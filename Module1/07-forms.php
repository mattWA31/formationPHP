<html>
<head>
</head>

<body>

<?php

if(isset($_POST['envoi'])){
    $prenom = $_POST['prenom'];
    $nom    = $_POST['nom'];
    echo "Prenom: $prenom<br />";
    echo "Nom: $nom<br />";
}

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <fieldset>
        <legend>Information personnelles</legend>
        <label>Prenom: </label>
        <input type="text" name="prenom"><br />
        <label>Nom: </label>
        <input type="text" name="nom"><br />
    </fieldset>
    <input type="submit" name="envoi" value="Envoyer" >
    <input type="reset" value="Retablir" >
</form>

</body>