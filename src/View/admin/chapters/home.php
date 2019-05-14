<?php
ob_start();

?>
<div id="chaptershome">
        <h1 id="chap-title">Chapitres</h1>
        <a id = "chap-create" href="creer-chapitre"> CREER CHAPITRE </a>
        <div id="thechapters">

            <table>
                <thead>
                    <td>TITRE</td>
                    <td>NUMERO</td>
                    <td>DATE DE PUBLICATION</td>
                    <td> </td>
                    <td> </td>
                </thead>
            <?php
            foreach ($result as $data):
            ?>
            <tr>
                <td> <?= $data->getTitle() ?></td>
                <td> <?= $data->getNumber() ?></td>
                <td> <?= $data->getCreationDate() ?></td>
                <td class="edit"> <a href="edit-chapitre&id=<?= $data->getId() ?>"> Editer </a> </td>
                <td class="delete"> <a href="supprimer-chapitre&id=<?= $data->getId() ?>" onclick="return confirm('Voulez-vous supprimer ?')" title="supprimer"> Supprimer </a></td>
            </tr>

        <?php endforeach ;?>
            </table>
        </div>
</div>
<?php

$content = ob_get_clean();

require("src/View/base.php"); ?>
