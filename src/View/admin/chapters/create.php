<?php
ob_start();
?>

<script>
    tinymce.init({
        selector: 'textarea#textarea',
        language: 'fr_FR',
        height: 500
    });
</script>
<div id="tinymce">

    <h1>Ajouter un chapitre</h1>
    <?php
        if(isset($save)) :
    ?>
    <form action="admin-creer-chapitre" method="post">
        <div>
            <label for="title">Titre :</label>
            <input required type="text" id="title" name="title" value="<?= $save->getTitle(); ?>">
        </div>
        <div>
            <label for="number">Numéro de chapitre :</label>
            <input required type="number" id="number" name="number" min="0" step="1" value="<?= $save->getNumber(); ?>">
            <p><?= $error; ?></p>
        </div>
        <div>
            <label for="textarea">Contenu :</label>
            <textarea id="textarea" name="textarea"><?= $save->getText(); ?></textarea>
        </div>
        <button class="bouton" type="submit">
            Envoyer
        </button>
    </form>
    <?php
        else :
    ?>
    <form action="admin-creer-chapitre" method="post">
        <div>
            <label for="title">Titre :</label>
            <input required type="text" id="title" name="title" placeholder="Votre titre">
        </div>
        <div>
            <label for="number">Numéro de chapitre :</label>
            <input required type="number" id="number" name="number" min="0" step="1">
        </div>
        <div>
            <label for="textarea">Contenu :</label>
            <textarea id="textarea" name="textarea"></textarea>
        </div>
        <button class="bouton" type="submit">
            Envoyer
        </button>
    </form>
    <?php
        endif
    ?>
</div>

<?php
$content = ob_get_clean();
include("src/View/base.php");
?>
