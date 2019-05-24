<?php
ob_start();
?>
<div id="resetPassword">
<form action="changement-mdp-email-check-email" method="post">
    <label for="check-email">Votre email : </label>
    <input type="email" id="check-email" name="check-email">
    <button type="submit">Confirmer</button>
</form>
</div>

<?php
$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>
