<div id="authorname">
    <h2>JEAN FORTEROCHE</h2>
    <p>Blog d'écrivain</p>
</div>
<nav id="navigation">
    <ul id="icons">
        <?php
            if (isset($_SESSION['pseudo'])) {
        ?>
        <a href="logout">Déconnexion</a>
        <?php
            }
            else {
        ?>
        <a href="page-connection-admin">Connexion</a>
        <?php
            }
        ?>
        <a class="fab fa-facebook" href="ton_lien.html"></a>
        <a class="fab fa-twitter" href="ton_lien.html"></a>
        <a class="fab fa-instagram" href="ton_lien.html"></a>
    </ul>
    <ul id="menu">
        <li><a href="accueil">ACCUEIL</a></li>
        <li><a href="roman">ROMAN</a></li>
        <li><a href="a-propos">A PROPOS</a></li>
        <li><a href="contact">CONTACT</a></li>
    </ul>

    <?php
    if (isset($_SESSION['pseudo'])){
    ?>
    <ul id="adminmenu">
        <li><a href="admin-commentaires">COMMENTAIRES</a></li>
        <li><a href="admin-chapitres">CHAPITRES</a></li>
    </ul>
</nav>

<?php }
?>