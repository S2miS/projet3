<?php
ob_start();
?>
<div class="container-fluid" id="homepage">
    <h1 id="home-title">Bienvenue !</h1>
<div class="row">
    <div id="hometext1" class="col-md-6 offset-md-3 col-sm-12">
        <p>Si vous souhaitez lire mon roman épisodique, rendez-vous ici !</p><a href="roman" title="ROMAN"><span>ROMAN</span></a>
    </div>

    <div id="hometext2" class="col-md-6 offset-md-3 col-sm-12">
        <p>Vous pouvez retrouver ma bibliographie ainsi que diverses informations sur la page "A propos"</p><a href="a-propos" title="A PROPOS"><span>A PROPOS</span></a>
    </div>

    <div id="hometext3" class="col-md-6 offset-md-3 col-sm-12">
        <p>Et si il vous viens l'envie de me contacter, un formulaire de contact est disponible sur la page "Contact"</p><a href="contact" title="CONTACT"><span>CONTACT</span></a>
    </div>
</div>
    <h3>Derniers chapitres</h3>

</div>
</div>
<div id="homechapters" class="container-fluid">
    <div class="row">
    <?php
    foreach($results as $data)
    {
        ?>
        <div class="col-md-4 col-sm-12">

            <a href='chapitre&id=<?=$data->getId();?>'>
                CHAPITRE N°
                <?= $data->getNumber() ; ?>
                :
                <?= $data->getTitle() ; ?>
            </a>
            Résumé :
            <?= substr($data->getText(),0,500). "..." ; ?>
        </div>
        <?php
    }
    ?>
</div>
</div>


<?php
$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>


