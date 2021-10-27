<?php
echo "CONDITIONS:  2";

$age = 25;


if ($age >= 6 && $age <= 25) {
echo 'LE TRAIN EST GRATUIT';
} else if ($age > 25) {
echo 'LE TRAIN EST PAYANT';
} else {
echo 'VOUS NE POUVEZ PAS PRENDRE LE TRAIN';
}



echo "<br>Exercice 2<bR>";

$animal = 'mouton';

if($animal == 'mouton' || $animal == 'vache'){
    echo 'RUMINANT';
} else {
    echo 'AUTRE';
}



echo 'EXERCICE 3<br>';

$prixColis = 80;
if($prixColis > 80) {
    echo $prixColis .' => ' . $prixColis *1.55;
} else if($prixColis >= 50 && $prixColis <= 80){
    echo $prixColis .' => ' . $prixColis *1.35;
} else if($prixColis > 20){
    echo $prixColis .' => ' . $prixColis *1.05;
} else {
    echo $prixColis;
}

// SI COLIS plus grand 20 euros TAXE 5%
// SI COLIS plus grand ou  = 50 et plus  petit que ou =80 TAXE 35%
// SI COLIS plus de 80 TAXE 55%