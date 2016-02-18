<!-- Models applicatif logique methie functions, Objet generique, qui se connectent a la base de donne-->
<?php
/*recupere les mots*/
/*function getWordsArrayFromCSVFile()
{

    $mots = [];

    if (!file_exists(FILENAME)) { //si le fichier n'existe pas il va recuperer un tableau vide
        return $mots; //si la condition existe

    }
    $handle = fopen(FILENAME, 'r');//ouvrir le fichier

    /*var_dump(fgetcsv($handle, 1000, ';'));die(); donne le detaille du contenu /fichier, taille, fin*/

    //recuperer un livre a la fois, si plus de
    while (($mot = fgetcsv($handle, 1000, ';')) != false) {//valeur de l'expression la valeur de la variable
        $mots[] = $mot;
    }

    fclose($handle);//fermer le fichier

    return $mots;

}

function getCharacterFromForm($lettre, $mots = null)//isbn et books avec valeur par defaut

{
    //returne null quand il y a pas de mots
    //conrtroler si mots n'est pas null
    if(is_null($mots)){
        return $mots;
    }
    //parcourir la chainne de character jusque a qu'on trouve la lettre correspondent
    $nbMots = count($mots[0]);
    foreach ($mots as $mot => $value): {
        $calcul = count($mot);
        echo ($mot[0].$calcul);
    }
endforeach;

    $i = 0;
    while (($lettre != $mots[$i][0]) && ($i < $nbMots - 1)){//obligatoire
        echo ($mots[0][$i]);
        $i++;
    }

    if($lettre === $mots[$i][0]){ // compare si la lettre est egale aux character a l'index $i du mots

        return $mots[$i];//i avec une valeur
    }
    return null;//
}
