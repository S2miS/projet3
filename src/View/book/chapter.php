<?php
ob_start();
?>
<div id="thechapter">
    <div id="thetext">
        <section>
            <h1><?= htmlspecialchars($result->getTitle()) ?></h1>
            <p><?= htmlspecialchars($result->getText()) ?></p>

        </section>
    </div>
    <section>
        <h1>Commentaires</h1>
        <div id="thecomments">
            <?php
            foreach ($result->getComments() as $data){
            ?>
            <div id="commcontent">
                <p id="commtitle"><?= htmlspecialchars($data->getPseudo()) ?>
                    <span>Publié le : <?= htmlspecialchars($data->getDate()) ?></span></p>
                <?php
                if ($data->getModerate()== true){
                    ?>
                    <p>Ce commentaire a été modéré</p>
                    <?php
                }
                else {
                    ?>
                    <p id="commmessage"><?= htmlspecialchars($data->getMessage()) ?></p>
                    <?php
                }
                if($data->getReported()== false) {
                    ?>
                    <a href="report&comm_id=<?= $data->getId() ?>&id=<?= $result->getId() ?>">Report</a>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
        }
        ?>
    </section>
</div>


<?php
$content = ob_get_clean();
require("src/View/base.php");
?>

