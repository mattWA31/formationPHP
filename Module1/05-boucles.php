<?php


// Boucle for
for($i = 0; $i <= 10; $i++){
    echo "$i - ";
}
echo '<br />';
for($i = 0; $i <= 10; $i+=2){
    echo "$i - ";
}
echo '<br />';echo '<br />';

// Boucle while
$i = 0;
// while ($i <= 10){ echo "$i - "; }
while ($i <= 10){ 
    echo "$i - ";
    $i++;
}


// Boucle foreach
$tab = [1,2,3,4];
$assoc = [
    "val1" => 1,
    "val2" => 2,
    "val3" => 3
];

echo '<br />';echo '<br />';

echo "Tableau<br />";
foreach($tab as $value){
    echo "$value<br />";
}

echo "Tableau associatif<br />";
foreach($assoc as $key => $value){
    echo "($key) $value <br />";
}

?>