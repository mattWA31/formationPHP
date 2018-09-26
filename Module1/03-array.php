<pre>
<?php
$tab[0] = 123;
$tab[1] = "toto";
$tab2 = [123, "toto"];
$tab3 = array(123, "toto");

echo $tab . "\n";
print_r($tab);

?>
</pre>

<pre>

<?php

$tabMultiArray = array(
                    array("bonjour", "le monde"),
                    array("ca", "vas ?")
                 );

print_r($tabMultiArray);

?>
</pre>

<pre>

<?php

$tabMixed = array(
                    "fruits"  => ["a" => "orange", "b" => "banane", "c" => "pomme"],
                    "nombres" => array(1, 2, 3, 4, 5, 6),
                    "trous"   => ["premier", 5 => "second", "troisieme"]
                 );

print_r($tabMixed);

?>
</pre>

<?php

$tab = array(
                    "fruits"  => ["a" => "orange", "b" => "banane", "c" => "pomme"],
                    "nombres" => array(1, 2, 3, 4, 5, 6),
                    "trous"   => ["premier", 5 => "second", "troisieme"]
                 );
                 
echo "taille du tableau de fruits = " . sizeof($tab["fruits"]) . "<br />";
echo "taille du tableau de nombres = " . count($tab["nombres"])  ."<br />";

?>

<pre>
<?php
// Sort()
$tab = array("deux" => 2, "un" => 1, "trois" => 3);
print_r($tab);
sort($tab);
print_r($tab);

?>
</pre>

<pre>
<?php
// asort()
$tab = array("deux" => 2, "un" => 1, "trois" => 3);
print_r($tab);
asort($tab);
print_r($tab);

?>
</pre>

<pre>
<?php
// ksort()
$tab = array("deux" => 2, "un" => 1, "trois" => 3);
print_r($tab);
ksort($tab);
print_r($tab);

?>
</pre>