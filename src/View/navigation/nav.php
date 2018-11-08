<div id="authorname">
    <h2>JEAN FORTEROCHE</h2>
    <p>Blog d'écrivain</p>
</div>
<nav id="navigation">
    <ul id="icons">
        <a class="fab fa-facebook" href="ton_lien.html"></a>
        <a class="fab fa-twitter" href="ton_lien.html"></a>
        <a class="fab fa-instagram" href="ton_lien.html"></a>
    </ul>
    <ul id="menu">
        <li><a href="../home/home.php">ACCUEIL</a></li>
        <li><a href="../book/allChapters.php">ROMAN</a></li>
        <li><a href="../about/about.php">A PROPOS</a></li>
        <li><a href="../contact/contact.php">CONTACT</a></li>
    </ul>

    <?php
    if (isset($_SESSION['admin'])){

    ?>
    <ul>
        <li><a href="../admin/home/home.php">ACCUEIL</a></li>
        <li><a href="../admin/commentary/commentary.php">COMMENTAIRES</a></li>
        <li><a href="../admin/chapters/home.php">CHAPITRES</a></li>
    </ul>

</nav>
<?php }
?>