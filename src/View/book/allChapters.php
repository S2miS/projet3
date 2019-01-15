<?php
ob_start();
?>
<div id="allchapters">
    <div id="Summary">
<h3>Résumé</h3>
<p>Aliquam nec mi dolor. Donec varius gravida tincidunt. Sed at ante viverra, gravida odio a, egestas dolor. Pellentesque lorem lacus, lobortis quis porta vitae, malesuada eget tortor. Aenean sagittis mi ac bibendum efficitur. Mauris mi neque, congue ut arcu vitae, dignissim pellentesque justo. Donec eleifend maximus ipsum. Phasellus in dui elementum, ultrices eros quis, iaculis diam. Donec et leo orci. Mauris finibus augue et accumsan euismod. Nunc velit justo, commodo et tellus cursus, rhoncus dignissim neque. Integer blandit metus sit amet nisi ultrices fermentum. Cras tempor sagittis pretium.</p>
    </div>
<h4>Chapitres</h4>
    <div id="chapterslist">
    <?php
    foreach($results as $data)
    { ?>
        <p>
        <a href='chapitre&id=<?=$data->getId() ; ?>' >
        CHAPITRE N°
        <?= $data->getNumber() ; ?>
         :
        <?= $data->getTitle() ; ?>
        </a></p><?php
    }
    ?>
    </div>
</div>
<?php
$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>

