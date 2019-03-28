<?php   header ( 'Content-Type: text/html;charset=UTF-8' );
    echo 'PHP marche !!! Tesst UTF-8 : éèàîî';
    require_once 'Voiture.php';
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Initiation PHP7-HTML5-CSS3 exercice 2</title>
    </head>

    <body>
        <?php
            $_voiture = new Voiture ( 4 );
            
                $_voiture.getX();
        ?>
    </body>
</html>
