<?php
ob_start();
?>

<form method="post" action="admin-auth">
    <div id="adminconnection">
    <fieldset>
        <label for="pseudo">Identifiant</label>
        <input type="text" name="pseudo" id="pseudo" />

        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" />

        <input type="submit" value="Valider">
    </fieldset>
    </div>
</form>


<?php
$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>
