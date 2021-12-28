# Les conditions

## LA VIDEO RECAP

[Video](https://www.youtube.com/watch?v=kbTIAUn2dZI)

## L'instruction Switch

L'instruction switch permet de remplacer des conditions(`if else if …`) qui vont comparer la même variable.

Exemple de switch

```php
// note sur 10
$note = '8';

switch($note) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Insuffisant';
    break; // on arrête de parcourir le switch si une correspondance est trouvée
    case 6:
    case 7:
        echo 'Bien';
    break;
    case 8:
    case 9:
        echo 'Très bien';
    break;
    case 10:
        echo 'Parfait !';
    break;
    default:
        echo 'Note inconnue'; // message par défaut si la note envoyée n'est pas connue
}

```

## Tableau PHP

Les tableaux PHP sont un type de donnée qui vont vous permettre de stocker de nombreuses informations.

Exemple

```php
//declaration de tableau
$t1 = array();
//declaration de tableau
$t2 = [];

//Déclaration de tableau avec des valeurs
$t3 = [
    'civilite' => 'Monsieur',
    'nom' => 'Dupon',
    'prenom' => 'Maurice'
];

```


## Variable globale $_GET



# EXERCICES

- Créez un nouveau fichier PHP `5.php` pour effectuer les exercices suivants

## EXERCICE 1

Ajoutez la marque `Audi` dans le tableau ci dessous et imprimez le résultat à l'écran à l'aide d'un `var_dump`

```php
$marques = [
    'Peugeot',
    'Renault',
    'Citroen'
];

//… ajout de audi dans le tableau
//… var_dump de l'objet $marques

```

## EXERCICE 2

Veuillez affichez les 3 marques se trouvant dans le tableau $marques à l'aide de l'instruction `echo`

// Attention c'est un tableau indexés sans clé

```php
$marques = [
    'Peugeot',
    'Renault',
    'Citroen'
];

```


## EXERCICE 3

Après la déclaration du tableau, veuillez mettre à jour le prenom de l'utilisateur : `Roger` à remplacer par `Bob`.
Imprimez le résultat à l'écran à l'aide d'un `var_dump`

```php
$utilisateur = [
    'nom' => 'Dupon',
    'prenom' => 'Roger',
    'dateDeNaissance' => '2000-01-01',
    'adresse' => 'place de la justice',

];

//modification

```



## EXERCICE 4

Passez dans votre url un `query` qui aura pour clé `heure`  où vous allez indiquer une valeur de  `0` à `23`

`localhost/5.php?hour=24`

Ensuite récupérez cette valeur grâce à la variable globale `$_GET` (qui est un tableau php) et venez afficher le bon message en fonction de l'heure


- Affichez **Bonjour** si l'heure est comprise entre 0-13
- Affichez **Bonne après midi** si l'heure est comprise entre 14-17
- Affichez **Bonsoir** si l'heure est comprise entre 18-23

```php

// Bonjour

// Bonne après midi

// Bonsoir


```



## EXERCICE 5

A l'aide d'un paramètre que vous passez dans l'url (`$_GET`) affichez une marque de voiture différente dès que la paramètre change.


```php
$voitures = [
    'audi',
    'citroen',
    'renault'
];


echo …  // Affichez une marque

```




## EXERCICE 6

A l'aide d'un paramètre que vous passez dans l'url (`$_GET`), changez la couleur de fond de la page.

