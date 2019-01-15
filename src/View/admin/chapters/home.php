<?php
ob_start();

include('src/Controller/Backend/bdConnect.php') ;

if(!isset($_SESSION['admin'])) {
header('Location:../connectionPage/connectionPage.php');
}

$query = $bdd->query('SELECT * from chapter ORDER BY date DESC') ;
$resultat = $query->fetchAll();
$nb_row = count($resultat);

echo '<h2> Vous avez '.$nb_row.' chapitres en ligne' ;

    foreach($resultat as $ligne) :
    echo '<table>' ;
        echo '<tr>' ;
            echo '<th> Edition </th>' ;
            echo '<th> Numéro </th>' ;
            echo '<th> Titre </th>' ;
            echo '<th> Date </th>' ;
            echo '<th> Contenu </th>' ;
            echo '</tr>' ;
        echo '</th>' ;

        echo '<tr>' ;
            echo '<td>' ;
                echo '<a href="edit.php?id='.$ligne['idchapter'].'"> Editer ce chapitre </a>' ;
                echo '</td>' ;
            echo '<td>' ;
                echo $ligne['number'] ;
                echo '</td>' ;
            echo '<td>' ;
                echo $ligne['title'] ;
                echo '</td>' ;
            echo '<td>' ;
                echo $ligne['date'] ;
                echo '</td>' ;
            echo '<td>' ;
                echo $ligne['text'] ;
                echo '</td>' ;
            echo '</tr>' ;
        echo '</table>' ;
    endforeach;

    echo "<p><a href='create.php'> Créer un chapitre </a></p>" ;

$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>
