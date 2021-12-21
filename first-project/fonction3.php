<?php

$message = " Comment allez vous ? ";


echo lcfirst(trim($message));

// version longue
//$message = trim($message);
//$message = lcfirst($message);

//echo $message;



//echo strlen($message);

//echo strpos($message, 'vous');

/*
if(strpos($message, 'vous') !== false){
    echo 'OK';
} else {
    echo 'KO';
}*/

echo '<br>';
$utilisateurs = [
    [
        'nom' => 'Roger',
        'date_de_naissance' => '2000-02-10',
    ],
    [
        'nom' => 'Maurice',
        'date_de_naissance' => '1988-02-10',
    ],
    [
        'nom' => 'Bob',
        'date_de_naissance' => '1900-02-10',
    ]
];

$premierElement = array_shift($utilisateurs);

echo '<pre>';
print_r($premierElement);
print_r($utilisateurs);

//echo count($utilisateurs);








