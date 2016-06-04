<?php
/*
variables pour mon jeux du pendu
*/
$lettersArray = getLettersArray();

$serializedLetters = userializeLetters($lettersArray);

$wordIndex = getWordIndex($wordsArray);

$word = $wordsArray[$wordIndex];//un mot

/*
$pageName = 'Jeux'; /*titre de la page

$siteTitle = 'Pendu';

$view = '_selectCharacterForm.php';//partial _ fragment de code

$errors = [];

/* constante, 3 parametres (nom, valeur et )

define('FILENAME', 'mots.csv');
*/
