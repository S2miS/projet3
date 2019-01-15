<?php
ob_start();
?>
<section>
    <?php
    echo $result{'title'};
    echo $result{'text'};
    ?>

</section>

<section>
    <?php

    ?>
</section>

<?php
$content = ob_get_clean();
require("src/View/base.php");
?>

