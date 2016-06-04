<?php

/*extract($_POST); //extrait tout les post*/
$serializedLetters = $_POST ['serializedLetters'];

$triedLetter = $_POST ['triedLetter'];

$triedLetters = $_POST ['triedLetters'];

$wordIndex = $_POST['wordIndex'];

$replacementString = $_POST['replacementString'];

$lettersCount = $_POST['lettersCount'];

$trials = $_POST ['trials'];

$word = getWord($wordsArray, $wordIndex);

$lettersArray = unserializeLetters($serializedLetters);

$lettersArray[$triedLetter] = false;

$serializedLetters = serializeLetters($lettersArray);

$triedLetters .=$triedLetter;

$letterFound = false;//lttre pas trouve


for ($i=0; $i < $lettersCount ; $i++) {
    if (substr($word, $i, 1) === $triedLetter ) {
        $letterFound = true; //si la lettre est trouve
        $replacementString = substr_replace($replacementString, $triedLetter, $i, 1);//remplacer l' ieme character par triedLetter
    }
}

if ($word === $replacementString) {
    $wordFound = 1;
}else {
    if (!$letterFound) {//si n'est pas faux
        $trials += 1;
    }
}

$remainingTrials = MAX_TRIALS - $trials;
