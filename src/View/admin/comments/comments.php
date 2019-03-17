<?php
ob_start();
?>
    <section>
        <h1>Commentaires signalés</h1>
        <a href="admin-commentaires-moderation">Vers les commentaires modérés</a>
        <div id="thecomments">
            <?php
            foreach ($result as $data){
            ?>
            <div id="commcontent">
                <p id="commtitle"><?= htmlspecialchars($data->getPseudo()) ?>
                    <span>Publié le : <?= htmlspecialchars($data->getDate()) ?></span></p>
                    <p id="commmessage"><?= htmlspecialchars($data->getMessage()) ?></p>
                <a href="admin-commentaires-moderation&id=<?= $data->getId() ?>">Modérer</a>
                <a href="admin-commentaires-enlever-signalement&id=<?= $data->getId() ?>">Enlever le signalement</a>
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