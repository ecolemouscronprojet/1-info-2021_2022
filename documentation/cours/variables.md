# Les variables

Une variable est un conteneur qui nous permet de stocker une/des informations de façon temporaire(le temps de l'execution de la page et ensuite l'emplacement mémoire est libéré).


### Déclarer une variable

Pour déclarer une variable, il faut lui donner un nom et le préfixer d'un **$**

Exemple 

```php
    $maVariable;
    $monVehicule;
```

:warning: Les variables sont sensibles à la casse, cela signifie que les majuscules et minuscules ont une importance. la variable
`$mamaison` ne sera pas la même variable que `$maMaison`.

:warning: Quand vous déclarez une variable vous devez respecter les règles suivantes pour éviter qu'une erreur de déclaration s'affiche à l'écran :

- Ne pas utiliser de caractères spéciaux
- Ne doit pas commencer par un nombre
- Ne doit pas contenir d'espace

:thumbsup: Bonnes pratiques pour déclarer vos variables
- Ne pas mettre d'accent
- Donner un nom explicite à votre variable, exemple `$date_de_naissance = '2000-01-01'; `
- Utilisez les conventions camelCase ou snake_case pour nommer vos variables, camelCase => `$maMaison`, snake_case => `$ma_maison`



### Affecter une valeur à une variable

Le fait d'affecter une valeur à une variable permet de stocker une information à l'intérieur.
Il faut déclarer la variable suivit d'un simple `=` et de la valeur que l'on souhaite lui affecter


```php
$monVehicule = 'peugeot';
$monAge = 50;
$estActive = true;
```

### Les types primitifs

Il existe 5 types primitifs (types de base) qui sont les suivants:

Nombre entier (`integer`)

```php
$maVariable = 10;
```

Nombre flottant (`float`)
```php
$maVariable = 10.15;
```

Chaine de caractère (`string`)
```php
    $maVariable = 'Mon Message';
```

Booléen (`boolean`)
```php
    $maVariable = true;
```


Nul (`NULL`)
```php
    $maVariable = NULL;
```

:warning: Avec le language PHP le typage des variables se fait de façon dynamique, c'est à dire que c'est le contenu qui va déterminer de quel type sera votre variable



# EXERCICES

- Dans votre projet créer un dossier `exercices` dans lequel vous allez placer un fichier `2.php`
- Démarrer votre serveur HTTP
- Rendez vous à l'adresse suivante http://localhost/projet/exercices/2.php
- Tous les exercices seront à réaliser dans le fichier `2.php`les un à la suite des autres


## EXERCICE 1

Continuez le code suivant, vous devez affecter la valeur `Garmin` à la variable `$maMontre` et imprimez le résultat à l'écran

```php
<?php
$maMontre;

```


## EXERCICE 2

Le but de cet exercice est des permuter les valeurs de la varibale `$a` avec celle de la variable `$b`
pour qu'au moment du `echo $a;` sa valeur imprime à l'écran 20 et du `echo $b` sa valeur imprime à l'écran 10


```php
<?php
$a  = 10;
$b  = 20;

// CODE A INSERER POUR PERMUTER

echo $a; // 20
echo $b; // 10

```


## LA VIDEO RECAP

 [Video](https://www.youtube.com/watch?v=cbPzoc9zpIo)