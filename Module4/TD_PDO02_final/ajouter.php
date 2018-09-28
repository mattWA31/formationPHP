<?php
require('bootstrap.php');

$req = $connexion->prepare("INSERT INTO etudiants (civilite, prenom, nom) VALUES (:civilite, :prenom, :nom)");
$req->bindParam(':civilite', $_POST['civilite']);
$req->bindParam(':prenom',   $_POST['prenom']);
$req->bindParam(':nom',      $_POST['nom']);
$req->execute();

header('Location: ./index.php');
?>