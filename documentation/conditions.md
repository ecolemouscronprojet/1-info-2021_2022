# Exercices sur les conditions
Créez un fichier exercice-1.php (Adresse pour vous y rendre http://127.0.0.1:8888/exercice-1.php) et réalisez les exercices suivants:

## Exercice 1

Utilisez une condition pour soit afficher à l'écran le nom + prénom ou simplement le prénom de la personne.

Aidez vous de la variable `$fullName`, si elle est vraie **nom + prénom** sinon juste le **prénom**

```php
<?php

$fullName = false;

$firstName = "Roger";
$lastName = "André";


```



## Exercice 2

Placez une/des condition(s) pour que le résultat imprimé à l'écran soit **93**

```php
<?php
$nb = 10;

$nb +=5;
$nb = 88;
$nb +=5;
$nb /=22;

echo $nb;
```


##  Exercice 3

En utilisant les conditions et les opérateurs arithmétiques, réalisez une calculatrice simplifiée.

- Si `$operator` vaut **+**  additionnez les deux nombres et imprimez le résultat à l'écran
- Si `$operator` vaut **-**  soustrayez les deux nombres et imprimez le résultat à l'écran
- Si `$operator` vaut **/**  soustrayez les deux nombres et imprimez le résultat à l'écran


```php
<?php
$operator = '+';
$nb1 = 10;
$nb2 = 25;

```


##  Exercice 4

Pourquoi le code suivant ne renvoie pas **OK** ?


```php
<?php
$nb1 = 10;
$nb2 = '10';

if($nb1 === $nb2){
    echo 'OK'
} else {
    echo 'KO';
}

```