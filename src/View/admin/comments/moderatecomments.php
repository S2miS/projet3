<?php
ob_start();
?>
<section class="reportedcomments">
        <h1>Commentaires modérés</h1>
        <a href="admin-commentaires">Vers les commentaires signalés</a>
        <div id="thecomments">
            <?php
            foreach ($results as $data){
                ?>
                <div id="commcontent">
                    <p id="commtitle"><?= htmlspecialchars($data->getPseudo()) ?>
                        <span>Publié le : <?= htmlspecialchars($data->getDate()) ?></span></p>
                    <p id="commmessage"><?= htmlspecialchars($data->getMessage()) ?></p>
                    <a  class="moderatecomment" href="admin-commentaires-nonmodere&id=<?= $data->getId() ?>">Supprimer la modération</a>
                </div>

                <?php
            }
            ?>

        </div>
    </section>

<?php
$content = ob_get_clean();
require("src/View/base.php");
?>