

<?php

echo '<h1>BOUCLES</h1>';


echo '<h2>WHILE</h2>';

$e = 0;
while ($e < 10) {
    echo ++$e . '<br>';
}


echo '<h2>DO WHILE</h2>';
do {
    echo 'OK';
} while (false);


echo '<h2>FOR</h2>';

for ($i = 1; $i < 10; $i++) {
    echo $i . '<br>';
}


echo '<h2>FOREACH</h2>';

$noms = ['albert', 'maurice', 'david', 'roger', 'gertrude'];
array_unshift($noms, 'TEST');
unset($noms[0]);

foreach ($noms as $k => $n) {
    echo $k . ' ' . $n . '<br>';
}
// echo '<pre>';
// print_r($noms);
echo 'message';






echo '<h1>EXERCICE1  </h1>';

for ($i = 0; $i < 10; $i++) {
    echo '*<br>';
}

echo '<h1>EXERCICE2  </h1>';

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        echo $i . ' -<br>';
    } else {
        echo $i . ' *<br>';
    }
}


echo '<h1>SAPIN2 </h1>';
/*
1 *
2 -
3 *
…*/