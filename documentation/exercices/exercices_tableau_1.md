# Exercices

Créez le fichier **exercices_tableau_1.php** et réalisez les exercices suivants:



### Exercice n°1

Imprimez à l'écran la deuxième valeur du tableau

```php
$nombres = [
    'maison',
    'voiture'
];
```


### Exercice n°2

Additionnez les deux nombres de ce tableau et imprimez le résultat à l'écran

```php
$nombres = [25, 30];

```

### Exercice n°3

Ajouter la marque **KIA** dans ce tableau et utilisez une fonction de debug pour imprimer le résultat à l'écran

```php
$marques = ['peugeot', 'citroen'];

```

### Exercice n°4

Trouvez sur internet la fonction qui permet de supprimer un élement du tableau et supprimez le 3ème élément du tableau + utilisez une fonction de debug pour imprimer le résultat à l'écran

```php
$meubles = ['table', 'bibliothèque', 'armoire', 'dressing'];

```



 ### Exercice n°5

Remplacer la propriété **nom** du tableau qui est **dupon** par **dupont** et utilisez une fonction de debug pour imprimer le résultat à l'écran


```php
$personne = [
    'prenom' => 'Maurice',
    'nom' => 'dupon'
];

```



 ### Exercice n°5

la boucle `foreach` permet d'itérer sur chaque valeur du tableau `$nombres` et lors de chaque itération il stocke dans la variable `$nombre` le nombre sur lequel il est en train d'itérer.
A l'intérieur des accolades, placez le code qui va permettre de stocker tous les nombres pairs dans le tableau `$pairs` et tous les nombres $impairs dans le tableau `$impairs`


```php
$pairs = [];
$impairs = [];
$nombres = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach($nombres as $nombre) {

}

```

### Exercice n°6

Ajoutez dans le tableau la date de naissance de cette personne qui est 20/02/1906

```php
$personne = [
    'nom' => 'Dujardin',
    'prenom'=> 'Bernard'
    ];
```

### Exercice n°7

Pourquoi quand j'imprime le contenu du tableau grâce à une fonction de debug, mon tableau ne contient que deux élements ?

```php
$monTableau = [];
$monTableau[]= 'MESSAGE';
$monTableau[]= "MESSAGE";
$monTableau[0]= 'MESSAGE';
```


