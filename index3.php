<?php   header ( 'Content-Type: text/html;charset=UTF-8' );
    require_once 'classeObjet.php';
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Initiation PHP7-HTML5-CSS3 exercice 2</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php
            $_objet = new Objet ( 19 );

            $_objet -> getX();
        ?>

        


    </body>
</html>
