<?php
// EXO 1
$monTab = array(1,-3,12,0,-5,7);

$monTab2 = array();
$monTab2[] = 1;
$monTab2[] = -3;
$monTab2[] = 12;
$monTab2[] = 0;
$monTab2[] = -5;
$monTab2[] = 7;

sort($monTab);

?>

<pre>
<?php
	print_r($monTab);
	var_dump($monTab);
?>
</pre>

<?php
// EXO 2
$monTab = array(1,-3,12,0,-5,7);

echo "<h2>Boucle avec FOR</h2>\n";
for($i=0;$i<count($monTab);$i++){
	$maVal = $monTab[$i];
	echo "\t<p class=''>$maVal</p>\n";
}

echo "<h2>Boucle avec WHILE</h2>\n";

//on initialise un compteur
$i=0;
//on défini la condition de sortie
while($i<count($monTab)){
	$maVal = $monTab[$i];
	echo "\t<p>$maVal</p>\n";
	//on incrémente le compteur
	$i++;
}

echo "<h2>Boucle avec FOREACH</h2>\n";
foreach($monTab as $cle=>$maVal) {
	echo "\t<p>$maVal (cle=$cle)</p>\n";
}
echo "Valeur de \$maVal=$maVal";


?>

<?php
// EXO 3
$monTab = array(1,-3,12,0,-5,7);
foreach($monTab as $cle=>$val) {
	$signe = "";
	if($val<=0) {
		$signe="négatif";
	} elseif($val==12) {
		$signe = "égal à 12";
	} else {
		$signe = "positif";
	}
	echo "<p>L'élément d'indice $cle ($val) est $signe </p>";
}
?>

<?php
// EXO 4
$capitales = array(
		"France"   => "Paris",
		"Italie"   => "Rome",
		"Belgique" => "Bruxelles"
);
			

echo "<p>La capitale du pays <strong>France</strong>";
echo " est <strong>".$capitales['France']."</strong></p>\n";			

foreach($capitales as $pays => $capitale) {
  echo "<p>La capitale du pays <strong>$pays</strong>";
  echo " est <strong>".$capitale."</strong></p>\n";
}

?>

<?php
// EXO 5
$infos = array(
		"civ"   => array("M.", "Mme", "Mlle", "Mme"),
		"nom"   => array("Dupont", "Duran", "Dulieu", "Dejean"),
		"ville" => array("Toulouse", "Rouen", "Paris", "Lille")
);
		
$personnes = array(
	array("civ"=>"M.",  "nom"=>"Dupont", "ville"=>"TOULOUSE"),
	array("civ"=>"Mme", "nom"=>"Duran",  "ville"=>"TOULOUSE"),
	array("civ"=>"Mlle","nom"=>"Duliue", "ville"=>"TOULOUSE"),
	array("civ"=>"Mme", "nom"=>"Dejean", "ville"=>"TOULOUSE")
);
	
//on considère que chaque sous tableau a le même nb d'élément
for($i=0;$i<count($infos["civ"]);$i++) {
	// echo "<p>Bonjour ".$infos["civ"][$i]." ".$infos["nom"][$i]. " vous habitez à ".$infos["ville"][$i]."</p>";
}	

// EXO 6
$abonnements = array (
		"M."  => "Turbo",
		"Mme" => "Figaroooo",
		"Mlle"  => "Express",
);
foreach($personnes as $personne) {
	echo "<p>Bonjour ".$personne["civ"]." ".$personne["nom"]. " vous habitez à ".$personne["ville"];
	switch($personne["civ"]) {
		case "M.":
			echo " vous etes abonné à ".$abonnements[$personne["civ"]];
			break;
		case "Mme":
			echo " vous etes abonnée à ".$abonnements[$personne["civ"]];
			break;
		case "Mlle":
			echo " vous etes abonnée à ".$abonnements[$personne["civ"]];
			break;
	}
		
	echo "</p>";
}
?>