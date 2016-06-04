<?php

$lettersArray = getLettersArray();

$serializedLetters = serializeLetters($lettersArray);

$wordIndex = getWordsIndex($wordsArray);

$word = getWord($wordsArray, $wordIndex);

$lettersCount = strlen($word);

$replacementString = getReplacementString($lettersCount);
