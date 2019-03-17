<?php
ob_start();

?>

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
                <td class="modif"> <a href="edit-chapitre&id=<?= $data->getId() ?>"> Editer </a> </td>
                <td class="modif"> <a href="supprimer-chapitre&id=<?= $data->getId() ?>" onclick="return confirm('Voulez-vous supprimer ?')" title="supprimer"> Supprimer </a></td>
            </tr>

        <?php endforeach ;?>
            </table>
        </div>

<style>

    .modif {
        font-weight: 700 ;
        border : 2px solid black ;
    }

    #thechapters {
        display : flex ;
        justify-content: center ;
        flex-flow : column ;
    }

    #chap-title {
        font-size : 3rem ;
        color : #474544;
        font-weight: 900;
        margin : 2% 0 3% 0 ;
    }

    #chap-create {
        border : 2px solid black ;
        margin : 2% 45% 2% 45% ;
        padding : 1% 2% 1% 2% ;
    }

    #thechapters table {
        line-height: 2rem;
        margin : 4% 5% 2% 5% ;
    }
    #thechapters table td {
        width : 20% ;
        text-align : center ;
        /*border : 1px solid black ;*/
    }

    #thechapters tr:nth-child(even) {
        background-color : lightgrey;
    }

    #thechapters table thead {
        background-color : #B6D7A8;
        text-align : center ;
        font-weight : 700 ;
    }

</style>
<?php

$content = ob_get_clean();

require("src/View/base.php"); ?>
