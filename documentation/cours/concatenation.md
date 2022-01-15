# Concaténation

La concaténation permet de chainer des informations les uns à la suite des autres

La concaténation se fait par le bias d'un **.** qui sera placé entre les deux éléments que l'on souhaite joindre.

## concaténer deux variables


```php
$message1 = 'Salut';
$message2 = ' comment allez vous ?';

echo $message1 . $message2;
```
cela affichera à l'écran `Salut comment allez vous ?`


## Concaténer variables + types primitifs

Vous avez la possibilité de concaténer des variables à des `string`, `integer`, `float`, `boolean`

Exemple

```php
$message1 = 'Salut';

echo $message . ' comment allez vous';
```
cela affichera à l'écran `Salut comment allez vous ?`

:information_desk_person: Vous avez la possibilité de joindre plus que deux éléments entre eux

Exemple

```php
$message1 = 'Salut';
$message2 = 'comment allez vous ?';

// ajout d'un espace entre les deux variables
echo $message1 . ' ' . $message2;
```


## Guillemets doubles ou simples

Quand doit-on utiliser des guillemets doubes ou simples ? :shrug:


Tout simplement, si la chaine que l'on souhaite englober  de guillemets contient une ou des variable(s), nous utiliserons des doubles, car ils viendront interpréter les variables là où les simples vont simplement les considérer comme une chaine de caractère.

Si, au contraire la chaine que l'on souhaite englober ne contient aucune variable, il est préférable d'utiliser des guillemets simples car moins couteux au niveau performance.


```php
$nom = 'Robert';

 echo 'Bonjour $nom <br>';
 echo "Bonjour $nom <br>";
```

Résultat

```html
Bonjour $nom
Bonjour Robet
```


