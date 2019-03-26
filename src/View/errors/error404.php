<?php
 ob_start();
 ?>

<h1>Erreur 404</h1>

<?php
$content=ob_get_clean();
require 'src/View/base.php';
?>
