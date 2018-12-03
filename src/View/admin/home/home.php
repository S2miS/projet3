<?php
ob_start();
?>
<h2>Bienvenue sur la page d'administration</h2>

<section>
    <h3> Commentaires signalés </h3>
    <?php
    include('../../../Controller/Backend/bdConnect.php') ;

    $query = $bdd->query('SELECT * FROM comments WHERE reported = 1 ORDER BY date DESC') ;
    $resultat = $query->fetchAll();
    $nb = count($resultat);
    if ($nb === 0 ) {
        echo "<h4> Il n'y a aucun commentaire signalé </h4>" ;
    }

    else {
        foreach($resultat as $ligne) :
            echo '<table>' ;
            echo '<tr>' ;
            echo '<th> Pseudo </th>' ;
            echo '<th> Date </th>' ;
            echo '<th> Message </th>' ;
            echo '<th> Numéro chapitre </th>' ;
            echo '</tr>' ;
            echo '</th>' ;

            echo '<tr>' ;
            echo '<td>' ;
            echo $ligne['pseudo'] ;
            echo '</td>' ;
            echo '<td>' ;
            echo $ligne['date'] ;
            echo '</td>' ;
            echo '<td>' ;
            echo $ligne['message'] ;
            echo '</td>' ;
            echo '<td>' ;
            echo $ligne['idchapter'] ;
            echo '</td>' ;
            echo '</tr>' ;
            echo '</table>' ;
        endforeach;
    }

    ?>
</section>
<?php
$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>
