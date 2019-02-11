<?php
ob_start();
?>
    <section>
        <h1>Commentaires</h1>
        <div id="thecomments">
            <?php
            foreach ($result->getComments() as $data){
            ?>
            <div id="commcontent">
                <p id="commtitle"><?= htmlspecialchars($data->getPseudo()) ?>
                    <span>Publié le : <?= htmlspecialchars($data->getDate()) ?></span></p>
                    <p id="commmessage"><?= htmlspecialchars($data->getMessage()) ?></p>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
<?php
$content = ob_get_clean();
require("src/View/base.php");
?>