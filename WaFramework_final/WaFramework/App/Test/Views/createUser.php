

<?php

    if(isset($errors)){
        foreach ($errors as $error){
            echo "<p style='color:red'>$error</p>";
        }
    } else if(isset($success)){
        echo "<p style='color:green'>L'utilisateur a bien été créer</p>";
    }

?>

<form action="createuser" method="post">
    <fieldset>
        <legend>Création d'un utilisateur</legend>
        <label>Nom: </label>
        <input type="text" name="nom"><br>
        <label>Prenom: </label>
        <input type="text" name="prenom"><br>
        <label>Email: </label>
        <input type="text" name="email"><br>
        <input type="submit" value="Envoyer">
    </fieldset>
</form>