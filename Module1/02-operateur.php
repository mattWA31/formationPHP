<?php
// Opérateurs arithmétique
$a = 3;
$b = 2;
$division = $a / $b;
$modulo = $a % $b;

echo "la division de $a / $b est égale à $division";
echo "<br />";
echo "le modulo de $a % $b est égal à $modulo";
echo "<br />";
echo "<br />";

// Opérateurs de concaténation
$chaine1 = "Bonjour";
$chaine2 = " le monde !";
$chaine = $chaine1.$chaine2;

echo "$chaine <br />";
echo $chaine." Comment ca va ?";
echo "<br />";
echo "<br />";

// Opérateurs de comparaison
$int = 123;
$chaine = "123";

echo "Résultat de \$int == \$chaine : *" . ($int == $chaine) . "*";
echo "<br />";
echo "Résultat de \$int === \$chaine : *" . ($int === $chaine) . "*";
echo "<br />";
echo "<br />";

// Opérateur de test
$a = 50;
$b = 30;
echo ($a > $b) ? 'a est plus grand' : 'b est plus grand';
?>