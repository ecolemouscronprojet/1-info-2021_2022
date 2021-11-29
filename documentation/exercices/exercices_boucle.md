# Exercices

Créez le fichier **exercices_boucle.php** et réalisez les exercices suivants:


### Exercice n°1

à l'aide de la boucle `while`, affichez 10 fois votre prénom.

```php
$i=0;
while($i<10) {
    $i++;
    echo 'Samuel';
}
```


### Exercice n°2

à l'aide de la boucle `while` listez les nombres de 1 à 10



### Exercice n°3

à l'aide de la boucle `while` listez les nombres divisibles par 3 

```php
 $i = 0 ;
 while ($i < 99) {
     $i += 3; // $i = $i + 3;
     echo $i .'<br>';
 }

 // SECONDE
  $i = 0 ;
 while ($i < 99) {
     $i++;
     if($i % 3 == 0) {
         echo $i;
     }
 }
```


### Exercice n°4

À l'aide de la boucle `foreach` imprimez les prénoms dans ce tableau à l'écran

```php
$prenoms = [
    'maurice',
    'roger',
    'andrew',
    'marc',
    'patrice',
    ];

foreach($prenoms as $prenom){
    echo $prenom . '<br>';
}

```

### Exercice n°5

 à l'aide de la boucle **for** affichez moi la table de multiplication de 5

```php
$e = 10;
for($i=1;$i<=10; $i++) {
    echo $i ." X $e =".( $i * $e ).'<br>';
}
```

### Exercice n°6


```php
$prenoms = [
    'maurice',
    'roger',
    'andrew',
    'marc',
    'patrice',
    'albert',
    ];

 foreach($prenoms as $key => $prenom) {
     if($key %2 == 0) {
         echo $prenom.'<br>';
     }
 }   


```




