<?php
require('bootstrap.php');

$req = $connexion->prepare("UPDATE etudiants SET civilite=:civilite, prenom=:prenom, nom=:nom WHERE id=:id");
$req->bindParam(':id',       $_POST['id']);
$req->bindParam(':civilite', $_POST['civilite']);
$req->bindParam(':prenom',   $_POST['prenom']);
$req->bindParam(':nom',      $_POST['nom']);
$req->execute();

header('Location: ./index.php');
?>