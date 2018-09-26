<?php 

require_once('personne.class.php');
require_once('etudiant.class.php');

if(isset($_POST['envoi'])){
    $prenom = $_POST['prenom'];
    $nom    = $_POST['nom'];
	$age    = $_POST['age'];
	
	$etudiant = new Etudiant($prenom, $nom, $age);
	$result = $etudiant->valider();
}

?>

<html>
<head>
</head>

<body>

<?php

if(isset($etudiant)){
	if($result == true){ ?>
		<p>les infos sont valide</p>
		<p>Prenom: <?= $etudiant->getPrenom() ?></p>
		<p>Nom: <?= $etudiant->getNom() ?></p>
		<p>Age: <?= $etudiant->getAge() ?></p>
		<?php $etudiant->save(); ?>
	<?php
	} else {
	?>
		<p>Les données ne sont pas valides</p>
		<p>Messages:</p>
		<ul>
		<?php foreach($result['msg'] as $message) { ?>
				<li><?= $message ?></li>
		<?php } ?>
		</ul>
	<?php
	}
}

?>

<form method="POST" action="07-forms.php" >
    <fieldset>
        <legend>Informations Etudiant</legend>
        <label>Prenom: </label>
        <input type="text" name="prenom" value="<?php ($etudiant->getPrenom()) ? $etudiant->getPrenom() : ''; ?>" ><br />
        <label>Nom: </label>
        <input type="text" name="nom" value="<?php ($etudiant->getNom()) ? $etudiant->getNom() : ''; ?>" ><br />
		<label>Age: </label>
        <input type="text" name="age" value="<?php ($etudiant->getAge()) ? $etudiant->getAge() : ''; ?>" ><br />
    </fieldset>
    <input type="submit" name="envoi" value="Envoyer" >
    <input type="reset" value="Retablir" >
</form>

</body>