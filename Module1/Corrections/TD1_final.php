<?php
	// Fichier TD1_Final.php
	/*
		Définition des données utiles:
			- PI
			- le rayon du cercle r
	*/
	define("PI", 6.14);
	$r = 2;
	define("PI", 3.14);
	$r += 1;
	
	$diametre 		= 2 * $r;		//calcul du diametre
	$circonference 	= 2 * PI * $r;	//calcul de la circonférence
	$surface 		= PI * $r * $r;	//calcul de la surface
	
	//creation de la variable $html pour l'affichage
	$html  = "<p>Informationssssss concernant un cercle d’un rayon \"r = $r cm\".</p>\n";
	$html .= "\t<ul>\n";
	$html .= "\t\t<li>Diam&eacute;tre = $diametre cm.</li>\n";
	$html .= "\t\t<li>Circonf&eacute;rence = $circonference cm.</li>\n";
	$html .= "\t\t<li>Surface du disque correspondant : $surface cm².</li>\n";
	$html .= "\t</ul>\n";
	$html .= "\t<p>La valeur de &Pi; est arrondie à ".PI.".</p>\n";
	
?>
<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>TD-1</title>
  <meta name="author" content="Matthieu Dolez" />
  <style>
	.centre {
		text-align: center;
	}
  </style>
</head>
<body>
	<h1 class="centre">"Le cercle de rayon <?php echo $r?>"</h1>
	<?php
		echo $html;
		
		echo "\t<p>Le rayon est de type: ".gettype($r)."</p>\n";
	?>
	<p>&Pi; est de type: <?php echo gettype(PI); ?> </p>
	<input type="button" name="afficher" value="afficher" />
</body>
</html>