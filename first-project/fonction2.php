<?php
function addition(int $nb1, int $nb2) {
    echo $nb1 + $nb2;
}

function addition2(int $nb1, int $nb2) {
    return $nb1 + $nb2;
}

echo '<h1>FONCTION</h1>';


// Additionner 4 et 10
addition(4, 10);
echo '<br>';
echo addition2(4, 10);
echo '<br>';

echo '<h2>test 2</h2>';

// 14 + 50 = 64
addition(4, 10) + addition(40, 10);
echo '<br>';
echo addition2(4, 10) + addition2(40, 10);

echo '<h2>test 3</h2>';

$v1 = addition(4, 10);
var_dump($v1);
echo '<br>';
echo '<br>';
$v2 = addition2(4, 10);
var_dump($v2);


