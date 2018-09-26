<?php
// EXO 1
function somme($tab) {
	$resultat = 0;
	foreach($tab as $element) {
			$resultat += $element;
	}
	return $resultat;
}

/* PARAMETRES */
$tableau = array(3,2,10,5);

/* TRAITEMENTS */
$somme 	 = somme($tableau);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Exo1</title>
  </head>
  <body>
	<?php
		echo "<p>Le resultat de la somme est ".$somme."</p>"
	?>
  </body>
</html>


<?php
// EXO 2
function traiter($chaine) {
	return ucfirst(strtolower($chaine));
}
?>

<!DOCTYPE html>
<html>
<head>
     <title>Exo 2</title>
</head>
<body>
    <?php
          $chaine = "BonJour LE MoNdE";
          echo traiter($chaine);
    ?>
</body>
</html>


<?php
// EXO 3
function valider($nom, $prenom, $age) {
	$retour            = array();
	$retour['msg']     = array();
	$retour['success'] = true;

	//nom ne doit pas etre vide
	//nom doit etre une chaine
	if($nom == '' || !is_string($nom)) {
		$retour['success'] = false;
		$retour['msg'][] .= "Erreur sur le nom";
	}
	
	//prenom ne doit etre vide
	//prenom doit etre une chaine
	if($prenom == '' || !is_string($prenom)) {
		$retour['success'] = false;
		$retour['msg'][] .= "Erreur sur le prenom";
	}
	
	//age ne doit etre vide
	//age numérique, entier
	if($age == '' || !is_int($age)) {
		$retour['success'] = false;
		$retour['msg'][] .= "Erreur sur l'age";
	}
	
	return $retour;
}

$nom 	= "DOLEZ";
$prenom	= "Matthieu";
$age 	= "34";

$validation = valider($nom,$prenom,$age);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
        if($validation['success'] === true) {
                echo "Les données sont valides";
        } else {
                echo "<p>Les données ne sont pas valides</p>";
                echo "<p>Messages:</p>";
                echo "<ul>";
                foreach($validation['msg'] as $message) {
                        echo "<li>$message</li>";
                }
                echo "</ul>";
        }
    ?>
    </body>
</html>
