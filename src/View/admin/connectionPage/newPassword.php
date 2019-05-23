<?php
ob_start();
?>

    <form action="changement-mdp-nouveau-mdp-check" method="post">
        <input type="hidden" value="<?= $_GET['token'] ?>" name="token" id="token">
        <label for="password-1">Votre nouveau mot de passe : </label>
        <input type="password" id="password-1" name="password-1">
        <label for="password-2">Confirmer le mot de passe : </label>
        <input type="password" id="password-2" name="password-2">
        <button type="submit">Confirmer</button>
    </form>


<?php
$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>