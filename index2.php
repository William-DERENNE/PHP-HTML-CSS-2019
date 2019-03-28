<?php   header ( 'Content-Type: text/html;charset=UTF-8' );

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Initiation PHP7-HTML5-CSS3 exercice 2</title>
    </head>

    <body>
        <?php
            echo '<hr />PHP marche ! Faisons un test UTF-8 : îéèçà<hr />';

            $truc = 'Bonjour monde !<br />';
                echo "$truc";
                echo $truc;

            $truc1 = "Bonjour";
                $Bonjour = 'Je suis le contenu de $Bonjour, résultant de $$truc1.<br />';

            $truc2 = "monde";
                $monde = 'Je suis le contenu de $monde, résultant de $$truc2.<br />';

            echo 'Le contenu (un peu amélioré...) de $truc1 + $truc2 est :  ' . $truc1 . ' ' . $truc2 . ' !<br />';
            echo 'Mais si on demande à PHP de nous donner la valeur de $$truc1 + $$truc2 est :<br />' . $$truc1 . ' - ' . $$truc2 . ' !<br />';
        ?>

        


    </body>
</html>
