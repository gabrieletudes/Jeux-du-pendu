<!--Controleur principal-->
<?php
/*est si on est en une requette get ou post
$__SERVER(): variable global, des valeurs predefinis pour nous

un peut du routage
*/

if($wordsArray = getWordsArray()){//affectation pas une comparaison

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    include 'controllers/getController.php';
}elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include 'controllers/postController.php';
}else {
    $error = "<p>Cette methode HTTP n'est pas utilisée</p>";
}
}
else {
    $error = '<p>OOps, un probleme est survenu lors du chargement de larray</p>'
}
