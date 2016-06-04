<?php
function getLettersArray()
{
    return [
        'a' => true,
        'b' => true,
        'c' => true,
        'd' => true,
        'e' => true,
        'f' => true,
        'g' => true,
        'h' => true,
        'i' => true,
        'j' => true,
        'k' => true,
        'l' => true,
        'm' => true,
        'n' => true,
        'o' => true,
        'p' => true,
        'q' => true,
        'r' => true,
        's' => true,
        't' => true,
        'u' => true,
        'v' => true,
        'w' => true,
        'x' => true,
        'y' => true,
        'z' => true
    ];
}

function serializeLetters($lettersArray){
    return urlencode(serialize($lettersArray));
}

function unserializeLetters($serializedLetters)
{
    return unserialize(urldecode($serializedLetters));
}

function  getWordsArray(){//executer a chaque requette en post ou en get

    return @file(SOURCE_NAME)?:false;

}

function getWordsIndex($wordsArray){
    return rand(0, count($wordsArray));//nombre des mots);
}

function getWord($wordsArray, $wordIndex)
{
    return strtolower(trim($wordsArray[$wordIndex]));
}

function getReplacementString($lettersCount){
    return str_pad('', $lettersCount, REPLACEMENT_CHAR); // repmi une chaine avec une autre chaine
}
