# LES TABLEAUX

## Utilité

Un tableau est un type de données qui permet de stocker dans un même endroit un ensemble d'informations (0 à X données).

### Exemple n°1

 Nous achetons des produits au supermarché et nous souhaiterions grouper ces différents produits par catégorie.

*Voici la liste des produits achetés*

- Pomme
- Poireau
- Chou-fleur
- Poire
- Banane
- Orange
- Pomme de terre

Grâce à la création de deux tableaux, nous aurions la possibilité de regrouper ces produits, un tableau pour les **fruits** et un autre pour les **légumes**, cela nous permettra d'identifier rapidement ce que nous avons acheté dans chaque catégorie.

| Fruits        | Légumes       |
| ------------- |---------------|
| Pomme         | Poireau       |
| Poire         | Chou-fleur    |
| Banane        | Pomme de terre|
| Orange        |               |

Si le tableau avait été plus complet en y placant également le prix de chaque produit

### Exemple n°2

Un utilisateur souhaite s'enregistrer en ligne sur un site web, durant son inscription nous avons besoin de récupérer un ensemble d'informations qui lui sont propres.

- Nom
- Prénom
- Date de naissance
- Mot de passe


Toutes ces informations sont réliées entre elle car elles appartiennent à un même individu, donc le type de donnée le plus approprié pour stocker ces informations est le tableau.



## Déclaration d'un tableau

Pour déclarer un tableau vide, voici deux possibilités :

```php 
// Première possibilité
$tableau1 = array();

// Deuxième possibilité
$tableau2 = [];
```

Pour déclarer un tableau avec des valeurs à l'intérieur, voici deux possibilités :


```php 
// Première possibilité
$tableau1 = array('maison', 'voiture');

// Deuxième possibilité
$tableau2 = ['maison', 'voiture'];
```




## Ajouter des élements dans un tableau

Pour ajouter des élements dans un tableau, deux possibilités:

- Utiliser la fonction [array_push](https://www.php.net/manual/en/function.array-push.php)
- Utiliser des crochets

```php 
// Initialisation d'un tableau vide
$monTableau = [];

// array_push
array_push($monTableau, 'valeur1');

// utilisation des crochets
$monTableau[] = 'valeur2';
```

Résultat de ce que contient le tableau

```
Array
(
    [0] => valeur1
    [1] => valeur2
)
```

:information_desk_person: **0** et **1** correspondent à la **clé** 
**valeur1** et **valeur2** correspondent à la **valeur** 


:information_desk_person: Les éléments dans un tableau sont ordonnées par ordre d'ajout dans le tableau, le dernier élément ajouté se placera à la fin du tableau


## Tableau indexé et tableau associatif

### Tableau indexé

Un tableau indexé est un tableau où les clés sont sous la forme numérique.

*Exemple*

```php
// Initialisation du tableau
$prenoms = [];

// ajout des informations dans le tableau
$prenoms[] = 'Maurice';
$prenoms[] = 'David';
$prenoms[] = 'Robert';
```

le résultat, chaque clé est sous forme numérique, le **0** est la clé pour accéder à la valeur **Maurice**

```
Array
(
    [0] => Maurice
    [1] => David
    [2] => Robert
)
```

### Tableau associatif

Un tableau indexé est un tableau où ses clés sont sous la forme de chaîne de caractère.

*Exemple*

```php
// Initialisation du tableau
$utilisateur = [];

// ajout des informations dans le tableau
$utilisateur['nom'] = 'Dupont';
$utilisateur['prenom'] = 'David';
$utilisateur['date_de_naissance'] = '2000-01-01';
```

le résultat, chaque clé est sous forme de chaine de caractère, le **nom** est la clé pour accéder à la valeur **Dupont**

```
Array
(
    [nom] => Dupont
    [prenom] => David
    [date_de_naissance] => 2000-01-01
)
```



## Remplacer des données dans un tableau


## Que peut-on enregistrer dans un tableau

Vous pouvez enregistrer toutes sortes de données, les types de données suivantes sont permises : `string`, `float`, `boolean`, `string`, `int`, `array`, `object`

Dans un tableau, vous avez également la possibilité d'enregistrer des informations n'appartenant pas au même type 
exemple
```php
$tableau1 = [];
$tableau1[] = 1; 
$tableau1[] = 'message'; 
$tableau1[] = true; 
$tableau1[] = 1.22; 

```
Résultat
```
Array
(
    [0] => 1
    [1] => message
    [2] => 1
    [3] => 1.22
)
```









// REMPLACER DES ELEMENTS
// EXEMPLE FRUIT ET LEGUMES
// ACCEDER à des éléments du tableau
// que peut on enregistrer dans un tableau 
// =>
// ORDRE DES ELEMENTS
// ITERER SUR UN TABLEAU


## Infos supplémentaires

certaines fonctions fournies par PHP permettent également de faire des manipulations de tableau

*Exemple:*

- [array_unshift](https://www.php.net/manual/en/function.array-unshift.php) permet d'ajouter un élement ou plus au début du tableau
- [array_shift](https://www.php.net/manual/en/function.array-pop.php) permet d'ajouter un élement au debut du tableau
- [array_pop](https://www.php.net/manual/en/function.array-pop.php) permet de retirer le dernier élement du tableau
- …

Voici la liste de toutes les fonctions disponibles pour les tableaux [ici](https://www.php.net/manual/en/ref.array.php)


