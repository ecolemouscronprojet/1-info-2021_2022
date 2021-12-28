# Les conditions

Les conditions vont vous permettre d'executer ou non un bloc d'instruction(s).

Si la condition est vraie on execute le code se trouvant à l'intérieur de celle-ci, si pas, ce code en question sera ignoré et on passera aux instructions suivantes.


## Cas d'utilisation dans une application

### Exemple 1

Une personne arrive sur mon site web, en fonction de l'heure à laquelle il se connecte, je souhaite lui afficher un message dynamique pour le saluer de la meilleure des façons 

- Bonjour, comment allez-vous ? (au matin)
- Bon après midi, comment allez-vous ? (durant la journée)
- Bonsoir, comment allez-vous ? (au soir)

Comment vais-je procéder pour y arriver ?

Tout simplement, dans un premier temps je vais écrire ces 3 instructions et dans un second temps je vais utiliser la puissance des conditions pour executer la bonne et ne pas prendre en compte les autres.


### Exemple 2

Une personne se rend sur mon site de vente d'alcool, avant de poursuivre sur le site, il faut lui demander s'il est majeur ou pas.
A sa première connexion, une popup s'affiche pour lui poser la question, en fonction de la réponse nous allons executer l'instruction adéquat

- s'il est majeur on lui affiche le site
- s'il n'est pas majeur on le redirige vers le site précédent

Même principe que pour l'exemple précédent, ces deux instructions vont se trouver dans le code, mais une seule des deux sera executée en fonction de la réponse que l'utilisateur aura indiquée.


## Comment ça fonctionne

Dans l'exemple ci-dessous **la condition** est respectée ce qui implique que toutes les instructions seront executées

![Condition vraie](images/condition-1.jpg )



Dans l'exemple ci-dessous **la condition** n'est pas respectée ce qui implique que les instructions se trouvant à l'intérieur du bloc condition ne seront pas executées, seule celles à l'exterieur du bloc le seront.

![Condition vraie](images/condition-2.jpg )


## L'instruction IF

La première instruction à connaitre est le `if` qui signifie **si**, cette instruction prend en paramètre une/des expression(s) qui vont retourner une valeur égale à `true` ou `false`

Exemple

```php

if (true) {
    echo 'MESSAGE'; // CETTE INSTRUCTION SERA EXECUTEE CAR LA CONDITION EST VRAIE
}

if (false) {
    echo 'MESSAGE'; // CETTE INSTRUCTION NE SERA PAS EXECUTEE CAR LA CONDITION N'EST PAS VRAIE
}
```


:warning: Attention

 - les parenthèses **( )** juste après le `if` sont obligatoires, c'est à l'intérieur de celles-ci que l'on va placer le ou les expressions qui vont indiquer si la condition est vraie ou fausse (`true` ou `false`)
 - Les accolades **{ }** ouvrantes et fermantes vont englober le code qui sera executé sous conditions, elles ne sont pas obligatoire mais fortement recommandée. Si vous n'ajoutez pas d'accolades, seule la première instruction sera considérée comme étant dans la condition.



## L'instruction ELSE

La seconde instruction à connaitre est le `else` qui signifie **sinon**, comparé au `if` elle n'attend pas qu'on lui passe une expression en paramètre.

:exclamation: Important: elle doit toujours se placer à la suite d'un `if` car ça n'aurait aucun sens de l'utiliser sans

Exemple

```php
$civilite = 'monsieur';

if($civilite == 'monsieur') { // si c'est un monsieur
    echo 'Bonjour monsieur';
} else { // si c'est autre chose qu'un monsieur
    echo 'Bonjour madame';
}
```


## L'instruction ELSE IF

Dernière condition à connaitre est le `else if` ou `elseif` (en PHP les deux syntaxes sont autorisées), elle a le même comportement que `if`, elle attend qu'on lui passe en paramètre une/des expressions.


:exclamation: Important: elle doit toujours se placer à la suite d'un `if` et avant un `else`


Exemple

```php
$civilite = 'monsieur';

if ($civilite == 'monsieur') {
    echo 'Bonjour monsieur';
} else if($civilite == 'madame') {
    echo 'Bonjour madame';
} else {
    echo 'Inconnu';
}
```


## L'ordre des instructions

Lorsque vous écrivez une condition, vous devez toujours démarrer par un `if`, ensuite vous enchainez avec des instructions optionnelles `elseif` ou `else`, par contre vous devez respecter l'ordre, `elseif` sera toujours situé entre le `if` et le `else`

 - `if` (obligatoire)
 - `else if`(optionel)
 - `else`(optionel)

 Qans vous écrivez un bloc contenant une condition, vous ne pouvez avoir qu'une seule fois le `if` et le `else` par contre le `elseif` peut être présent plusieurs fois, si c'est le cas, vous pouvez remplacer la condition par un `switch`


 ## Les expressions à l'intérieur des conditions

A l'intérieur d'une condition `if` ou `else if` on attend une expression qui renvoie soit `true` ou `false`, dans les exemples précédents nous avons directement indiqué la valeur `true` ou `false` par souci de facilité, mais cela ne doit jamais arriver car cela ne rend pas le code dynamique (un vrai sera toujours vrai…).

Quand on ajoute une expression dans une condition on va venir en général comparer deux informations, voir même plusieurs informations (voir **Opérateurs logiques**)

## Opérateurs de comparaisons

Voici la liste des opérateurs qui vont nous permettre d'éffectuer des comparaisons et donc renvoyer `true` ou `false`

| Opérateur de comparaison  |  Définition |
|------|----------------------------------------------|
|  ==  |  Tester l'égalité sur les valeurs            |
|  === |  Tester l'égalité sur les valeurs et le type |
|  !=  |  Tester si les valeurs sont différentes      |
|  <>  |  Tester si les valeurs sont différentes      |
|  <   |  Tester si inférieur                         |
|  >   |  Tester si supérieur                         |
|  >=  |  Tester si inférieur ou égale                |
|  <=  |  Tester si supérieur ou égale                |

Exemple, hors d'une condition.

```php
$maVariable = 'Hello';
$maVariable2 = 'SALUT';

$maVariable == $maVariable2; // renvoie false
$maVariable == 'Hello'; // renvoie true
$maVariable == 1; // renvoie false
$maVariable == 10.5; // renvoie false

$nb1 = 20;
$nb1 > 10; // renvoie true
$nb1 <= 4; // renvoie false
```

:warning: l'exemple précédent va retourner un booléan, mais ne va pas imprimer le résultat à l'écran car on ne lui dit pas de le faire.

Exemple avec des conditions

```php

$age = 26;
if($age >= 18) { // l'expression renvoie true, la condition est respectée
    echo 'vous êtes majeur';
}


if($age === 26) { // l'expression renvoie true, la condition est 
    echo 'vous avez 26 ans';
} else {
    echo 'je ne connais pas votre age';
}

```


## Opérateurs de logiques

Dans certains cas, nous sommes confrontés à comparer plus d'une seule expression et pour cela nous allons utiliser des **opérateurs logiques**


| Opérateur de logique  |  Définition |
|------|----------------------------------------------|
|  &&  |  ET                                          |
|  ||  |  OU                                          |
|  and |  ET                                          |
|  or  |  OU                                          |
|  xor |  une des deux expressions doit être vraie pas les deux|
|  !  |  le contraire, à placer au debut de l'expression              |

:warning: Le fait qu'il y ait deux **ou** et deux **et** est parce que certains auront une priorité plus importante que l'autre.


Exemples 

```php
$age = 25;

// si on souhaite vérifier qu'une personne a entre 18 et 25 ans pour bénéficier de réductions sur le train

if($age <= 25 && $age >= 18){
    echo 'Vous avez une réduction';
} else {
    echo 'Vous n\'avez pas de réduction';
}


// Vérifier si une voiture est sportive

$marque = 'ferrari';

if($marque == 'ferrari' || $marque == 'bugatti') {
    echo 'Vous avez une voiture de sport';
} else {
    echo 'Vous avez une voiture normale';
}

```


## Opérateur ternaire

Vous avez la possibilité de créer une condition sur une seule ligne, on appelle cela **un opérateur ternaire**

**CONDITION** ? **CODE EXECUTE SI VRAI** : **CODE EXECUTE SI FAUX**

Exemple


```php
$age = 20;

echo $age >= 18 ? 'Majeur' : 'Mineur';

```

Ce code affichera à l'écran **Majeur**


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


:warning: Attention une condition est fausse si l'expression à l'intérieur retourne les valeurs suivantes: `false`, `0` ou `null`.
Toute autre valeur sera considérée comme vraie.

# EXERCICES

- Créez un nouveau fichier PHP `4.php` pour effectuer les exercices suivants


## EXERCICE 1

- [ ] Créez une variable `$prixTVA` dans laquelle vous allez y stocker le prix avec la TVA
- [ ] Utilisez les conditions pour comparer le `$prixTVA`  et en fonction du montant afficher le bon message (exemple: si > 100: `prix supérieur à 100€` )



```php
$prixHT = 90;
$tva = 21;


echo 'prix supérieur à 100€';

echo 'prix égale à 100€';

echo 'prix inférieur à 100€';


```


## EXERCICE 2

Utilisez des conditions pour afficher le bon message:


Bonjour `Monsieur ou Madame` vous êtes `âgés ou jeune`;


```php
// 1: Monsieur, 2: Madame
$civilite = 1;

// 70: agés  en dessous: jeune
$age = 30;

```


## EXERCICE 3

le `++` permet d'incrémenter +1 à un nombre

Exemple

```php
// Exemple 1
$i = 10;
$i++;
echo $i; // imprime à l'écran 11

// Exemple 2
$age = 32;
$age++;
echo $age; // imprime à l'écran 33
```

Pouvez vous m'éxpliquez pourquoi le code suivant va imprimer à l'écran `Egale` ?

```php
$e = 20;

if($e++ == 20){
    echo "Égale";
} else {
    echo "Non égale";
}

```


## LA VIDEO RECAP

 [Video](https://www.youtube.com/watch?v=o3xCpnXFIOI)