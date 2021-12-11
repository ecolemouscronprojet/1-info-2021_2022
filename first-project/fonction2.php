<?php
function addition(int $nb1, int $nb2)
{
    echo $nb1 + $nb2;
}

function addition2(int $nb1, int $nb2)
{
    return $nb1 + $nb2;
}
function soustraction(int $nb1, int $nb2)
{
    return $nb1 - $nb2;
}


function calcul(int $nb1, int $nb2, string $operator)
{
    if ($operator == '+') {
        return $nb1 + $nb2;
    } else if ($operator == '-') {
        return $nb1 - $nb2;
    } else if ($operator == '/') {
        return $nb1 / $nb2;
    } else if ($operator == '*') {
        return $nb1 * $nb2;
    }
}

function calcul2(int $nb1, int $nb2, string $operator)
{
    echo eval("$nb1 $operator $nb2");
    return 'yoo';
}

echo calcul2(100, 2, '*');
exit;

//fonction addition 
// 3 paramètres => nb1, nb2, opérateur [+, -, /, *]

echo '<h1>FONCTION</h1>';


echo soustraction(10, 5);
echo '<br>';

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
