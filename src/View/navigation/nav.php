<div id="authorname">
    <h2>JEAN FORTEROCHE</h2>
    <p>Blog d'écrivain</p>
</div>
<nav>
    <ul>
        <a class="fab fa-facebook" href="ton_lien.html"></a>
        <a class="fab fa-twitter" href="ton_lien.html"></a>
        <a class="fab fa-linkedin-in" href="ton_lien.html"></a>
    </ul>
    <ul id="menu">
        <li><a href="../home/home.php">Accueil</a></li>
        <li><a href="../book/home.php">Roman</a></li>
        <li><a href="../about/about.php">A Propos</a></li>
        <li><a href="../contact/contact.php">Contact</a></li>
    </ul>

    <?php
    if (isset($_SESSION['admin'])){

    ?>
    <ul>
        <li><a href="../admin/home/home.php">Accueil</a></li>
        <li><a href="../admin/commentary/commentary.php">Commentaires</a></li>
        <li><a href="../admin/chapters/home.php">Chapitres</a></li>
    </ul>

</nav>
<?php }
?>