<?php

echo '<h1>EXERCICE 2</h1>';

$a = 10;
$b = 5;
$c = sqrt($a * $a + $b * $b);

echo $c;


echo '<h1>EXERCICE 3</h1>';

$nb1 = 10;
$nb2 = 5;
$nb3 = 25;

if ($nb1 > $nb2 and $nb1 > $nb3) {
    echo $nb1;
} else if ($nb2 > $nb1 and $nb2 > $nb3) {
    echo $nb2;
} else {
    echo $nb3;
}


echo '<h1>EXERCICE 4</h1>';

/*$free = false;
if ($free === true) {
    echo 'GRATUIT';
} else {
    echo 'PAYANT';
}
*/

$free = false;

echo $free ? 'GRATUIT' : 'PAYANT';


echo '<h1>EXERCICE 5</h1>';

$values = [true, false, true, true, false, false, true];

$i = 0;
foreach ($values as $v) {
    if ($v == true) {
        $i++;
    }
}


echo $i;
