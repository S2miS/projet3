<?php
ob_start();
?>
<form action="../../../index.php" method="post">

        <input type="text" id="name" name="user_name" placeholder="Nom ou pseudo">
        <input type="email" id="mail" name="user_mail" placeholder="E-Mail">
        <input type="text" id="title" name="user_title" placeholder="Titre du message">
        <textarea id="msg" name="user_message" placeholder="Message"></textarea>
        <input type="checkbox">
        <label for="msg">J'accepte les conditions d'utilisation</label>
        <a href="#">Lien vers les Mentions Légales</a>
        <input type="submit" class="btn" value="Envoyer" />
</form>

<?php
$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>
