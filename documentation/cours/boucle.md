# LES BOUCLES

## Utilité

Les boucles permettent de répéter des instructions tant que la condition ou les conditions sont respectées.

## Comportement

Lorsque nous écrivons un code simple, les instructions s'executent de haut en bas sans revenir en arrière.

Lorsque nous écrivons un code utilisant une boucle, les instructions vont s'executer de haut en bas, dès qu'il arrive en bas, il retourne en haut éxecuter à nouveau les instructions jusqu'a ce que la condition ne soit plus respectée.

![Drag Racing](images/boucle.jpg )


### Exemple n°1

Nous souhaitons afficher 100 fois à l'écran la phrase **MON MESSAGE**, deux posibilités s'offrent à nous
- Soit écrire 100X le message ce qui serait fastidieux
- Soit utiliser une boucle qui va venir répéter l'instruction qui imprime le message à l'écran

```php
// BOUCLE{}
    echo 'MON MESSAGE';
// BOUCLE

```


### Exemple n°2

Nous récupérons 100 utilisateurs en base de données et nous souhaitons les lister.


- Soit les lister à la main ce qui est fastidieux

```php
    echo '<ul>';
    echo '<li>' .$utilisateurs[0]['nom']. '</li>';
    echo '<li>' .$utilisateurs[1]['nom']. '</li>';
    echo '<li>' .$utilisateurs[2]['nom']. '</li>';
    …
    echo '<li>' .$utilisateurs[99]['nom']. '</li>';
    echo '</ul>';-

```

Soit utiliser une boucle (FOREACH) pour tous les afficher

```php
echo '<ul>';
foreach($utilisateurs as $utilisateur) {
    echo '<li>' .$utilisateur['nom']. '</li>';
}

echo '</ul>';
```


Dans le premier cas, je décide d'afficher 100 utilisateurs, si je décide en base de données de rajouter un utilisateur, je vais devoir adapter mon code alors qu'avec la boucle non.


## BOUCLE WHILE

Exemple 

```php

while (/* condition */) {
    // instruction à répéter
}


```





## BOUCLE  DO WHILE

```php
do {

}
while (/* condition */)
```

## FOR

```php
for(/*initialisation*/;/*condition*/;/*incrementation*/) {

}
```

## FOREACH

```php
foreach(/*tableau*/ as /*element sur lequel on itère*/){

}
```
