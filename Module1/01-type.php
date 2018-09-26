<?php
// Les types supportés

$entier = 12;
$virgule = 1.284;
$bool = true;
$string = "toto";
$array = [1,2,3];
$assoc = [
    "nom" => "Dolez",
    "prenom" => "Matthieu"
];

echo $entier;
echo "<br />";
echo $virgule;
echo "<br />";
echo $bool;
echo "<br />";
echo $string;
echo "<br />";
echo "<br />";

// Inclusion des quotes et des doubles quotes
echo "exemple1: bonjour le monde";
echo "<br />";
echo 'exemple2: bonjour le monde';
echo "<br />";
echo "exemple3: bonjour 'le monde'";
echo "<br />";
echo 'exemple4: bonjour "le monde"';
echo "<br />";
echo "exemple5: bonjour \"le monde\"";
echo "<br />";
echo 'exemple6: bonjour \'le monde\'';
echo "<br />";
echo "<br />";


// Fonctions associées aux types
$var = "toto";
echo "Le type de la variable est: ";
echo gettype($var);
echo "<br />";
echo "Resultat de la fonction is_string: ";
echo is_string($var);
echo "<br />";
echo "Resultat de la fonction is_int: ";
echo is_int($var);
echo "<br />";

$var = "123toto";
$add = $var + 4;
echo "Avant la fonction unset: $var";
echo "<br />";
unset($var);
echo "Après la fonction unset: $var";
echo "<br />";
echo "Valeur de add: $add";
echo "<br />";

$var = 3.14;
echo "Avant la fonction intval: $var";
echo "<br />";
echo "Après la fonction intval: ";
echo intval($var);
echo "<br />";
echo "<br />";


// Les constantes
echo PHP_OS;
echo "<br />";
echo PHP_VERSION;
echo "<br />";
/*
echo "<pre>";
print_r(get_defined_constants());
echo "</pre>";
echo "<br />"; */

define("MA_VAR", 1234);
echo MA_VAR;
echo "<br />";
echo "<br />";

// Les variables d'environnement
echo $_SERVER['QUERY_STRING'];
echo "<br />";
echo $_SERVER['REQUEST_METHOD'];
echo "<br />";
echo "<pre>";
print_r($_GET);
echo "</pre>";
echo "<br />";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br />";
echo "<br />";

?>