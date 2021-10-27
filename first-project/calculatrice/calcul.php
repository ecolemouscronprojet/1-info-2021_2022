<?php
$nb1 = $_POST['nb1'] ?? null;
$nb2 = $_POST['nb2'] ?? null;
$action = $_POST['action'] ?? null;

if($action == '+'){
    echo $nb1 + $nb2;
} else if($action == '-'){
    echo $nb1 - $nb2;
} else if($action == '/'){
    echo $nb1 / $nb2;
}
