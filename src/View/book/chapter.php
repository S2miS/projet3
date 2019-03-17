<?php
ob_start();
?>
<div id="thechapter">
    <?php
    if (isset($_SESSION['flash'])){
        ?>
    <p><?= $_SESSION['flash']?></p>
    <?php
        unset($_SESSION['flash']);
        }
    ?>
    <div id="thetext">
        <section>
            <h1><?= htmlspecialchars($result->getTitle()) ?></h1>
            <p><?= $result->getText() ?></p>

        </section>
    </div>
    <section>
        <h1>Commentaires</h1>
        <div id="thecomments">
            <?php
            foreach ($result->getComments() as $data):
            ?>
            <div id="commcontent">
                <p id="commtitle"><?= htmlspecialchars($data->getPseudo()) ?>
                    <span>Publié le : <?= htmlspecialchars($data->getDate()) ?></span></p>
                <?php if ($data->getModerate()== true) : ?>
                    <p>Ce commentaire a été modéré</p>
                    <?php else : ?>
                    <p id="commmessage"><?= htmlspecialchars($data->getMessage()) ?></p>
                    <?php if($data->getReported()== false) : ?>
                    <a href="report&comm_id=<?= $data->getId() ?>&id=<?= $result->getId() ?>">Report</a>
                    <?php endif ; ?>
                    <?php endif ; ?>
            </div>
        </div>
        <?php endforeach ; ?>

        <h1>Ajouter un commentaire</h1>
        <form action="chapitre-creer-commentaire&chapterid=<?= $result->getId() ?>" method="post">
            <div>
                <label for="user_name">Nom :</label>
                <input type="text" id="user_name" name="user_name">
            </div>
            <div>
                <label for="user_message">Message :</label>
                <textarea id="user_message" name="user_message"></textarea>
            </div>
            <button class="bouton" type="submit">
                Envoyer
            </button>
        </form>
    </section>
</div>


<?php
$content = ob_get_clean();
require("src/View/base.php");
?>

