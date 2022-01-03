# LES FONCTIONS

## Utilité

Les fonctions vous permettent de créer du code réutilisable, pour faire simple, vous écrivez une seule fois le code et vous pouvez le réutiliser autant de fois que vous le souhaitez.

### Exemple

Je souhaite trouver la longueur de l'hypoténuse d'un triangle rectangle ayant des côtés de 3 et 4 cm.

Pour y arriver je vais créer le code suivant:

```php
    $c1 = 3; //côté 1
    $c2 = 4; //côté 2

    $calcul = $c1 * $c1 + $c2 * $c2; //calcul
    $reponse = sqrt($calcul); // racine carré pour trouver la longueur
    echo $reponse; // on imprime le résultat à l'écran

```

Le résultat: **5**.

Ensuite, on me demande d'effectuer à la suite du code ci-dessus la même opération, mais cette fois-ci avec des longueurs différentes, donc je décide de recopier le code et de modifier la valeur des variables `$c1` et `$c2`.



```php
    $c1 = 20;
    $c2 = 40;

    $calcul = $c1 * $c1 + $c2 * $c2;
    $reponse = sqrt($calcul);
    echo $reponse;

```

Le résultat: **44.72**.

:warning: Un développeur ce n'est une personne faineante qui a la volonté d'écrire le moins de code possible ? :thinking:

Évidemment que oui ! Ici nous nous rendons compte que nous avons écrit à peu de chose près 2 fois le même code, il serait peut être plus judicieux d'utiliser un système qui permette d'embarquer ce code, de le délivrer à chaque fois que l'on en a besoin et c'est la que les fonctions viennent à notre secours !


## Déclarer mes propres fonctions

Voici un exemple simple, montrant comment déclarer une fonction qui a pour but d'afficher un simple message **Hello World**

```php
function helloWorld() {
    echo 'Hello World<br>';
}
```

 - `function` est le mot clé pour indiquer que l'on déclare une fonction
 - **helloWorld** est le nom que nous donnons à notre fonction
 - les parenthèses qui vont nous servire plus tard pour y passer des paramètres
 - Des accolades pour englober les instructions qui seront executés lors de l'appel à la fonction, ici `echo 'Hello World';`


## Appeler une fonction

Pour appeler une fonction, il faut écrire le nom de celle-ci suivi des parenthèses et paramètre(s) s'il y en a.

Exemple

```php
helloWorld();
helloWorld();
```

le résultat

```
Hello World
Hello World
```


:exclamation: les fonctions sont insensibles à la casse, c-à-d que `helloWorld()` et `HELLOWORLD()` vont appeler la même fonction. 



## Passer des informations à une fonction

Je souhaite créer une fonction additionnant 2 nombres, le problème c'est comment indiquer à ma fonction les nombres que je souhaite additionner ? :thinking:

Tout simplement en les lui passant en paramètres c-à-d à l'intérieur des parenthèses.

Exemple

```php
// Déclaration de la fonction addition
// nous indiquons que cette fonction prend 2 paramètres $nb1 et $nb2
function addition($nb1, $nb2) {
    echo $nb1 + $nb2;
}

$nombre1 = 10;
$nombre2 = 5;

// appel de la fonction avec des variables
addition($nombre1, $nombre2)  // affiche le resultat  15

// appel de la fonction avec des nombres entier
addition(8, 2) // affiche le resultat  10
```

Dans l'exemple ci-dessus `$nb1` et `$nb2` sont des variables uniquement disponible à l'intérieur de la fonction **addition** à l'éxtérieur ces variables n'existent pas sont inconnues.




`addition($nombre1, $nombre2)` imprimera le résultat **15** à l'écran, ce qu'il faut savoir, c'est que `$nombre1` s'interfacera sous la variable `$nb1` à l'intérieur de la fonction et la même chose pour le `$nombre2` qui sera `$nb2` à l'intérieur de la fonction



## Une fonction renvoie un résultat

Une des bonnes pratique à avoir quand on utilise crée une fonctioj






## La portée des variables





## références

// typer les paramètres







## fonction récursive


## fonction disponibles en php


## Exemples de fonctions