<?php
$serializedLetters = $_POST ['serializedLetters'];

$triedLetter = $_POST ['triedLetter'];

$triedLetters = $_POST ['triedLetters'];

$lettersArray = unserializeLetters($serializedLetters);

$lettersArray[$triedLetter] = false;

$serializedLetters = serializeLetters($lettersArray);

$triedLetters .=$triedLetter;
