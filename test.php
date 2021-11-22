<?php
// Initialisation du tableau
$utilisateur  = [
    'nom' => 'Dupon',
    'prenom' => 'Maurice',
    'adresses' => [
        [
            'rue' => 'Rue de l\'analyse',
            'numero' => 18,
        ],
    ]
];

$utilisateur['nom'] = 'Dupont';
$utilisateur['adresses'][0]['numero'] = 19;


echo '<pre>';
print_r($utilisateur);
/*
Array
(
    [nom] => Dupont
    [prenom] => David
    [date_de_naissance] => 2000-01-01
)
*/