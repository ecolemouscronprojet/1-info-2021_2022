# LES BOUCLES

## Utilité

Les boucles permettent de répéter des instructions tant que la/les conditions sont respectées.

## Comportement

Lorsque nous écrivons un code simple, les instructions s'executent de haut en bas sans revenir en arrière.

Lorsque nous écrivons un code utilisant une boucle, les instructions vont s'executer de haut en bas, dès qu'il arrive en bas, il retourne en haut éxecuter à nouveau les instructions jusqu'a ce que la condition ne soit plus respectée.

![Boucle](images/boucle.jpg )


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

Une boucle while se décompose avec le mot clé `while` suivi de parenthèses dans lesquelles on va rajouter une expression devant retourner `true` ou `false` (même fonctionnement que pour les conditions). Tant que l'expression renvoie `true`, on continuera à boucler et executer X fois le code se trouvant à l'intérieur des accolades

### Exemple 
```php
while (/* condition */) {
    // instruction à répéter
    // instruction à répéter
    // instruction à répéter
}
```

Généralement, on utilise les boucles `while` quand on ne connait pas le nombre de fois que l'on doit itérer.

### Exemple de boucle while

```php
$i = 0;
while ($i < 5) { // condition
    echo 'bonjour n°' . $i;
    $i++; // incrémentation 
}
```

La condition indique que l'on doit parcourir la boucle tant que `$i` est plus petit que 5, à l'intérieur de la boucle on incrémente `$i`de plus 1 à chaque passage. Le message *bonjour n°x* sera affiché 5 fois.


### Exemple de boucle infinie avec while

```php
while (true) {
    echo 'message<br>';
}
```

Ici la condition est toujours **vraie** ce qui implique que les instructions à l'intérieur de la condition vont se répéter à l'infini (voir faire planter le navigateur);






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
