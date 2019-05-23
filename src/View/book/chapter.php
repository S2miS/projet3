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
        <h2>Commentaires</h2>
        <div id="thecomments">
            <?php
            foreach ($result->getComments() as $data):
            ?>
            <div id="commcontent">
                <?php if ($data->getModerate()!= true) : ?>
                <p id="commtitle"><span>
                        <?= htmlspecialchars($data->getPseudo()) ?></span>
                    <span>Publié le : <?= htmlspecialchars($data->getDate()) ?></span></p>
                    <?php else : ?>
                    <p id="commtitle"><span>Pseudo supprimé</span>
                    <span>Publié le : <?= htmlspecialchars($data->getDate()) ?></span></p>
                <?php endif ; ?>
                <?php if ($data->getModerate()== true) : ?>
                    <p>Ce commentaire a été modéré</p>
                    <?php else : ?>
                    <p id="commmessage"><?= htmlspecialchars($data->getMessage()) ?></p>
                    <?php if($data->getReported()== false) : ?>
                    <a href="report&comm_id=<?= $data->getId() ?>&id=<?= $result->getId() ?>">Signaler</a>
                    <?php endif ; ?>
                    <?php endif ; ?>
            </div>
            <?php endforeach ; ?>
        </div>

        <h2>Ajouter un commentaire</h2>
        <form action="chapitre-creer-commentaire&chapterid=<?= $result->getId() ?>" method="post">
            <div id="user_name">
                <label for="user_name">Nom :</label>
                <input type="text" id="user_name" name="user_name">
            </div>
            <div id="user_message">
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

