<?php
    /*
    	Définir ici les données utiles:
            - PI
            - le rayon du cercle r 
    */
    
    // Completer ici
    
    
    
    // Calcul
    $diametre 		= 2 * $r;       //calcul du diametre
    $circonference 	= 2 * PI * $r;	//calcul de la circonférence
    $surface 		= PI * $r * $r;	//calcul de la surface
    
    //creation de la variable $html pour l'affichage
    $html = "<div style='border:1px solid black; padding: 10px;'>";
    
    // Compléter ici
    
    $html.= "</div>";
    
?>
<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <title>TD 1</title>
  <meta name="author" content="Matthieu DOLEZ" />
  <style>
	.centre {
		text-align: center;
	}
  </style>
</head>
<body>
	<h1 class="centre">Le cercle de rayon <?php // A completer (Afficher le rayon) ?></h1>
	<?php
		// A completer (Afficher le html)
		// A completer (Afficher le type du rayon)
	?>
	<p>&Pi; est de type: <?php // a completer (Afficher le type de PI) ?> </p>
</body>

</html>