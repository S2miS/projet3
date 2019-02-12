<?php
ob_start();

session_start();
include('src/Controller/Backend/bdConnect.php') ;

if(!isset($_SESSION['admin'])) {
    header('Location:../connectionPage/connectionPage.php');
}

if(isset($_GET['id'])) {
    $id = $_GET['id'] ;
}
else {
    header('Location:home.php');
}

$query = $bdd->query('SELECT * FROM chapter WHERE idchapter = '.$id.'') ;
$resultat = $query->fetchAll();

foreach($resultat as $ligne) :
    echo '<form method="POST" action="traitement.php">' ;
    echo '<label for="id"> ID de chapitre </label> <input readonly type="text" name="id" id="id" value="'.$ligne['idchapter'].' "/>' ;
    echo '<label for="number"> Numéro de chapitre </label> <input type="text" name="number" id="number" value="'.$ligne['number'].'"/>' ;
    echo '<label for="title"> Titre de chapitre </label> <input type="text" name="title" id="title" value="'.$ligne['title'].'"/>' ;
    echo '<label for="date"> Date de publication </label> <input type="datetime" name="date" id="date" value="'.$ligne['date'].'"/>' ;
    echo '<label for="text"> Contenu </label> <input type="text" name="text" id="text" value="'.$ligne['text'].'"/>' ;
    echo '<input type="submit" value="Submit">' ;
    echo '</form>' ;
endforeach;

$content = ob_get_clean();
?>
<?php
require("src/View/base.php");
?>
