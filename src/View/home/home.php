<?php
ob_start();
?>
<div id="homepage">
    <h1 id="home-title">Bienvenue !</h1>

    <div id="hometext1">
        <p>Si vous souhaitez lire mon roman épisodique, rendez-vous ici !<a href="http://localhost/Projet3/src/View/book/allChapters.php" title="ROMAN"><span>ROMAN</span></a></p>
    </div>

    <div id="hometext2">
        <p><a href="http://localhost/Projet3/src/View/about/about.php" title="A PROPOS"><span>A PROPOS</span></a>Vous pouvez retrouver ma bibliographie ainsi que diverses informations sur la page "A propos"</p>
    </div>

    <div id="hometext3">
        <p>Et si il vous viens l'envie de me contacter, un formulaire de contact est disponible sur la page "Contact"<a href="http://localhost/Projet3/src/View/contact/contact.php" title="CONTACT"><span>CONTACT</span></a></p>
    </div>

    <h3>Derniers chapitres</h3>

</div>
<div id="homechapters">
<?php
foreach($results as $data)
{
    ?>
    <div class="inline-chapters">
        <?php
            echo "<p><a href='accueil-chapitre".$data->getId()."'>";
            echo " CHAPITRE N° " ;
            echo $data->getNumber() ;
            echo " : ";
            echo $data->getTitle() ;
            echo "</a>";
            echo " Résumé : " ;
            echo $data->getText() ;
            echo $data->getCreationDate() ;
            echo "</p>";
            ?>
    </div>
<?php
}
?>
</div>

<?php
$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>


