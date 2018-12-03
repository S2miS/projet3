<?php
ob_start();
?>
<form method="post" action="src/View/admin/connectionPage/traitement.php">

    <fieldset>
        <label for="id">Identifiant</label>
        <input type="text" name="id" id="id" />

        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" />

        <input type="submit" value="Submit">
</form>


<?php
$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>
