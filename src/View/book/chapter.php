<section>
    <?php
    include('../../Controller/Backend/bdConnect.php');
    // include de la bdd pour ne pas avoir à réecrire les informations de connexion à chaque fois

    $requete = $bdd->query( 'SELECT * FROM chapter WHERE idchapter = 1' );
    //Récupérer les données
    $resultat = $requete->fetchAll();
    //Afficher les données
    foreach($resultat as $ligne) :
        echo '<h2>' ;
        echo 'Chapitre numéro' ;
        echo $ligne['numero'];
        echo '</h2>' ;
        echo '<h3>' ;
        echo $ligne['titre'];
        echo'</h3>' ;
        echo '<p>' ;
        echo $ligne['contenu'];
        echo'</p>' ;
    endforeach;
    ?>

</section>

<section>
    <?php
    $requete = $bdd->query( 'SELECT * FROM comments WHERE idchapter = 1' );
    //Récupérer les données
    $resultat = $requete->fetchAll();
    //Afficher les données
    foreach($resultat as $ligne) :
        echo '<h2>' ;
        echo 'Pseudo : ' ;
        echo $ligne['pseudo'];
        echo '</h2>' ;
        echo '<h3>' ;
        echo $ligne['date'];
        echo'</h3>' ;
        echo '<p>' ;
        echo $ligne['contenu'];
        echo'</p>' ;
    endforeach;
    ?>
</section>
