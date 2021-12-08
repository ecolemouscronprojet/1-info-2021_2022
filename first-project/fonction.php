<?php
//création d'une fonction
function carre($width, $color)
{
    echo '<div style="
        width: ' . $width .'px;
        height: '. $width . 'px;
        background: ' . $color .';
        "></div><br>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <br>
    <?php
    // appel de la fonction
    carre(100, 'blue');
    carre(250, 'yellow');
    ?>
</body>

</html>