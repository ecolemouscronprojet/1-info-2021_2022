<?php
echo 'tableau<br>';

$t1 = array();
$t2 = [];

array_push($t1, 'Maurice');
$t1[] = 'bob';
//$t1 = array('bob');

echo $t1[2];


$test = [
    [
        'nom' => 'ROGER',
        'prenom' => 'BERNARD',
        'adresse' => [
            [
                'rue' => 'rue des poires',
                'numero' => 18,
            ]
        ]
    ]
];



echo '<pre>';
var_dump($test);
