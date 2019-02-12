<?php
ob_start();
?>
<div id="homepage">
    <h1 id="home-title">Bienvenue !</h1>

    <div id="hometext1">
        <p>Si vous souhaitez lire mon roman épisodique, rendez-vous ici !<a href="roman" title="ROMAN"><span>ROMAN</span></a></p>
    </div>

    <div id="hometext2">
        <p><a href="a-propos" title="A PROPOS"><span>A PROPOS</span></a>Vous pouvez retrouver ma bibliographie ainsi que diverses informations sur la page "A propos"</p>
    </div>

    <div id="hometext3">
        <p>Et si il vous viens l'envie de me contacter, un formulaire de contact est disponible sur la page "Contact"<a href="contact" title="CONTACT"><span>CONTACT</span></a></p>
    </div>

    <h3>Derniers chapitres</h3>

</div>
<div id="homechapters">
<?php
foreach($results as $data)
{
    ?>
    <div class="inline-chapters">

         <p>
            <a href='accueil-chapitre<?=$data->getId();?>'>
            <p> CHAPITRE N°
            <?= $data->getNumber() ; ?>
            :
            <?= $data->getTitle() ; ?>
            </a>
            Résumé :
            <?= substr($data->getText(),0,500). "..." ; ?>
            </p></p>
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


