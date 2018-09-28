<?php
require('bootstrap.php');

$req = $connexion->prepare("DELETE FROM etudiants WHERE id=:id");
$req->bindParam(':id', $_GET['id']);
$req->execute();


header('Location: ./index.php');
?>