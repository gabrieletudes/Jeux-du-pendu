<?php

$mots = getWordsArrayFromCSVFile(); //les valuer pour nos select


if(isset($_GET['lettrechoix'])){
    $lettre = $_GET['lettrechoix'];//stocker la lettre

    $mot = getCharacterFromForm($lettre, $mots);//stocke le book

    //tester si le resultat contient un livre si non des erreurs
    //est l'application
    if(!is_null($mot)){
        $view = '_singleBook.php';

    }else{
        $errors ['invalidISBN'] = 'La lettre n’existe pas';
    }

}
