<?php

for($i=0;$i<=100;$i++) {
    if($i %3 == 0) {
        echo "$i<br>";
    }
}
exit;
/*
if($civilite == 1){
 echo 'Monsieur';
} else if ($civilite ==2){
    echo 'Madame';
    
} else {
    echo 'inconnu';
}


*/

$operator = '_';
$nb1 = 10;
$nb2 = 25;


if ($operator = '+') {
    echo $nb1 + $nb2;
} else if ($operator == '-') {
    echo $nb1 - $nb2;
} else if ($operator == '/') {
    echo $nb1 / $nb2;
}
