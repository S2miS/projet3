<?php
ob_start();
 ?>
<div id="tinyedit">
<script>
    tinymce.init({
        selector: 'textarea#textarea',
        language: 'fr_FR',
        height: 500,
        /*forced_root_block : ""*/
    });
</script>
<h1>Modifier un chapitre</h1>
<form action="modifier-chapitre&id=<?= $_GET['id'] ; ?>" method="post">
    <div>
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" value="<?= htmlspecialchars($result->getTitle()) ; ?>">
    </div>
    <div>
        <label for="number">Numéro de chapitre :</label>
        <input type="number" id="number" name="number" min="0" step="1" value="<?= $result->getNumber() ; ?>">
    </div>
    <div>
        <label for="textarea">Contenu :</label>
        <textarea  id="textarea" name="textarea"><?= htmlspecialchars($result->getText()) ; ?></textarea>
    </div>
    <button class="bouton" type="submit" onclick="return confirm('Valider la modification ?')">
        Envoyer
    </button>
</form>
</div>
<?php

$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>
