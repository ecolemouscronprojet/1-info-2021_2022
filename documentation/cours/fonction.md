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

Évidemment que oui ! Ici nous nous rendons compte que nous avons écrit à peu de chose près 2 fois le même code, il serait peut être plus judicieux d'utiliser un système qui permette d'embarquer ce code et de le délivrer à chaque fois que l'on en a besoin. C'est la que les fonctions viennent à notre secours !


## Déclarer mes propres fonctions

Voici un exemple simple, montrant comment déclarer une fonction qui a pour but d'afficher un simple message **Hello World**

```php
function helloWorld() {
    echo 'Hello World<br>';
}
```

 - `function` est le mot clé pour indiquer que l'on déclare une fonction
 - **helloWorld** est le nom que nous donnons à notre fonction
 - les parenthèses qui vont nous servir plus tard pour y passer des paramètres
 - Des accolades pour englober les instructions qui seront executés lors de l'appel à la fonction, ici `echo 'Hello World';`


## Appeler une fonction

Après avoir déclaré notre fonction, nous avons besoin de l'appeler, pour y arriver nous devons écrire le nom de celle-ci suivi des parenthèses et paramètre(s) s'il y en a.

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

Tout simplement en les lui passant en paramètre c-à-d à l'intérieur des parenthèses.

Exemple

```php
// déclaration de la fonction addition qui prend en compte 2 paramètres $nb1 et $nb2
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


:sassy_man: Comment ça fonctionne ? quand nous executons `addition($nombre1, $nombre2)` les informations de l'appels (`$nombre1`, `$nombre2` ou 8, 2) vont venir s'interfacer à celle de la fonction (`$nb1`, `$nb2`):

Dans l'appel à la fonction `addition($nombre1, $nombre2)`  :arrow_right: `$nb1` vaudra **10** et `$nb2` vaudra **5**

```php
function addition($nb1/* valeur 10 */, $nb2 /* valeur 5 */) {
    echo $nb1 + $nb2; // 10 + 5 = 15
}
```

Dans l'appel à la fonction `addition(8, 2)` :arrow_right: `$nb1` vaudra **8** et `$nb2` vaudra **2**

```php
function addition($nb1/* valeur 8 */, $nb2 /* valeur 2 */) {
    echo $nb1 + $nb2; // 8 + 2 = 10
}
```


Maintenant, revenons à l'exemple du début qui était de trouver la longueur de l'hypoténuse d'un triangle, on crée une fonction prenant 2 paramètres qui sont les côtés, à l'intérieur de la fonction on effectue le calcul et on imprime le résultat

```php
function hypotenuse($cote1, $cote2) {
    $calcul = $cote1 * $cote1 + $cote2 * $cote2;
    $reponse = sqrt($calcul);
    echo $reponse;
}

hypotenuse(3, 4); // affiche 5
hypotenuse(20, 40); // affiche 44.72
```

La logique a été écrite une seule fois et nous pouvons l'utiliser autant de fois que souhaité.



:warning: Lorsque vous appelez une fonction qui attend x paramètre(s), vous devez passer ces x paramètre(s) sinon une erreur s'affichera vous indiquant que le nombre de paramètre(s) n'est pas bon.


### Typer les paramètres

Vous avez la possibilité de typer les paramètres pour sécuriser un peu plus les entrées dans votre fonction.

Exemple

```php
function test(string $var1, int $var2)
```

Ici le `$var1` doit être de type **string** et `$var2` doit être de type **int**


### Paramètres avec une valeur par défaut

Vous avez la possibilité d'indiquer une valeur pas défaut à vos paramètres, si vous ne les surchargez pas pendant l'appel à la fonction ils prendront leur valeur par défaut.

Exemple

```php
  function test($var1 = 'default' , $var2 = 1){
      echo $var1 . ' ' . $var2;
  }

  test(); // affiche 'default 1'
  test('Salut', 8); // affiche 'Salut 8'

```



## Renvoyer un résultat

Une bonne pratique quand on crée une fonction est de renvoyer un résultat et non pas utiliser des `echo` comme nous l'avons fait précédemment.

Le fait de retourner un résultat permet de maitriser l'information que la fonction vous renverra, vous pourrez en faire ce que vous voulez stocker dans une variable, décider de l'afficher à l'écran …


:green_circle: Exemple correct

```php
function addition($nb1, $nb2){
    return $nb1 + $nb2;
}

addition(10, 5); // le calcul sera fait et retourné mais pas affiché à l'écran
$resultat = addition(10, 5); // ici on stocke le résultat dans une variable
echo $resultat; // affiche 15

echo addition(18, 12); // affiche 30
```

:red_circle: Exemple à ne pas reproduire


```php
function addition($nb1, $nb2){
    echo $nb1 + $nb2;
}

addition(10, 5); // affiche le résultat à l'écran 
$resultat = addition(10, 5); // ne stocke rien dans la variable et affiche le résultat à l'écran
echo $resultat; // affiche null
```


## La portée des variables dans une fonction

Il faut savoir que les variables que vous allez déclarer à l'intérieur ou à l'extérieur d'une fonction on une porté

Une variable déclarée à l'intérieur d'une fonction n'est disponible que dans cette fonction et pas à l'extérieur.

Une variable déclarée à l'extérieur d'une fonction ne sera pas disponible à l'intérieur de la fonction


Exemple

```php
$var1 = 'test';



function monMessage(){
    $var2 = 'test2';

    echo $var1; // retourne une erreur car $var1 n'existe pas dans la fonction
}


echo $var2; // retourne une erreur car $var2 existe seulement à l'intérieur de la fonction

```



## Références
// ATTENTE
 
## Fonction récursive

// ATTENTE

## Fonction disponibles en PHP

PHP fournit un ensemble de fonctions qui vont nous permettre de code plus rapidement :smile:

Avant de développer votre propore fonction vérifier si PHP ne le founit pas déjà !

Voici quelques exemples

- **var_dump** fonction de débug retournant en détail le contenu d'une variable
- **print_r** fonction de débug retournantle contenu d'une variable
- **isset** fonction vérifiant si une variable existe et est déclarée
- **empty** fonction vérifiant si une variable n'est pas vide
- **str_replace** fonction permettant de remplacer des informations par d'autres dans une chaine de caractères
- **strpos** fonction cherchant la position de la première occurance d'une chaine de caractères
- **strlen** fonction retournant la taille d'une chaine de caractères
- **count** fonction retournant la taille d'un tableau
- **array_push** fonction ajoutant un élémant dans un tableau






# Exercices

## Exercice 1

Réalisez une fonction qui permet de retourner une tranche de nombres, exemple 1 à 10: [1, 2, 3 ,4, 5 , 6, 7, 8, 9, 10]


## Exercice 2

Réalisez une fonction qui permet de retourner une table de multiplication

## Exercice 3

Réalisez une fonction qui permet de retourner la suite de Fibonacci en lui passant un nombre de départ et un nombre de fin
 

