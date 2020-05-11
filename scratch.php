<?php

/**
 * Écrire une méthode qui transforme une phrase en entrée, en permutant les moitiés de chaque mot, à condition que le mot
 * fasse au moins 6 carctères.
 * Ex: La maison près de la fontaine ==> La sonmai près de la ainefont
 */

/**
 * wTransform($phrase)
 *
 * Step #1 : on prend le paramètre en entrée et on en fait un tableau
 * Step #2 : On créé une variable string vide, en vue du traitement final car on envisage de concaténer les mots en
 * partant d'un string vide (qui doit être obligatoirement déclaré sous forme de variable)
 * Step #3 : on foreach sur chaque élément (nos mots) du tableau
 * -> Pour chaque élément, on vérifie la longueur du mot, et s'il est >= 6, on inverse les 2 parties du
 * mot afin d'en faire un nouveau mot avec les parties inversées. Le cas échéant, on garde le mot d'origine.
 *
 * -> Pour chaque élément, dès que la condition if/else est passée, on aura obligatoirement une variable $resultWord
 * correspondante. Et c'est cette variable spécifique qui va nous permettre, par concaténation, de construire notre
 * nouvelle phrase. On utilise pour cela .= afin de rajouter, à chaque itération, le mot (transformé ou original) à
 * notre $resultSentence qui a la base était vide (Step #2)
 *
 * Step #4 : on retourne notre phrase complète, $resultSentence, en lui applicant un dernier petit rtrim() afin de
 * lui enlever le dernier espace.
 *
 * @param $phrase
 * @return string
 */
function wTransform($phrase)
{
    // ex : "La petite maison dans la prairie"
    $tabPhrase = explode(" ", $phrase);
    $resultSentence = '';
    foreach ($tabPhrase as $key => $word) {
        $count = strlen($word);
        if ($count >= 6) {
            $firstPartLenght = (int) $count / 2;
            $firstPart = substr($word, 0, $firstPartLenght);
            $secondPart = substr($word, $firstPartLenght);
            $resultWord = $secondPart . $firstPart;
        } else {
            $resultWord = $word;
        }
        $resultSentence .= $resultWord . ' ';
    }
    return rtrim($resultSentence);
}


/**
 * wTransform2($phrase)
 *
 * Exactement similaire à la function wTransform(), à l'exception du $resultSentence qui à la place d'être un string
 * devient un tableau. Par conséquent, son traitement dans la boucle foreach() change. Au lieu d'opérer à une
 * concaténation comme dans la fonction précédente, on décide à la place de rajouter un élement dans notre tableau
 * $resultSentence (indexé numériquement).
 * A la fin du foreach, on implode le tableau afin d'avoir en retour un string.
 *
 * @param $phrase
 * @return string
 */
function wTransform2($phrase)
{
    // ex : "La petite maison dans la prairie"
    $tabPhrase = explode(" ", $phrase);
    $resultSentence = [];
    foreach ($tabPhrase as $key => $word) {
        $count = strlen($word);
        if ($count >= 6) {
            $firstPartLenght = (int) $count / 2;
            $firstPart = substr($word, 0, $firstPartLenght);
            $secondPart = substr($word, $firstPartLenght);
            $resultWord = $secondPart . $firstPart;
        } else {
            $resultWord = $word;
        }
        $resultSentence[] = $resultWord;
    }
    $resultFinal = implode(' ', $resultSentence);
    return $resultFinal;
}

$test = 'So perhaps you have generated some fancy text and you are content that you can now copy and paste your fancy text in the comments section of funny cat videos, but perhaps you\'re wondering how it\'s even possible to change the font of your text? Is it some sort of hack? Are you copying and pasting an actual font?';
var_dump(wTransform($test));
var_dump(wTransform2($test));









/*
function toCamelCase($str){
    if(ctype_upper($str[0]) === true) {
        return ucfirst(str_replace('-', "", ucwords(strtr($str, '_-', ' '))));
    } else {
        $result = lcfirst(str_replace('-', "", ucwords(strtr($str, '_-', ' '))));
        return str_replace(' ', '', $result);
    }
}

function toCamelCaseBis($str){
    $exludedLetters = ['_',' ','-'];
    $str = str_split($str);
    foreach ($str as $key => $letter) {
        if ($key === 0) {
            $camelName = '';
        }

        if (!in_array($letter, $exludedLetters)) {
            if (ctype_upper($str[$key]) === false) {
                $camelName .= (string) ($letter);
            } elseif (ctype_upper($str[$key]) === true) {
                $camelName .= (string) ucfirst($letter . '*') ;
            }
            str_replace($letter.'*', ucfirst($letter), $camelName);
        }
    }
    return str_replace('*', '', $camelName);
}


function test($str) {
    preg_match('s/(?<=[^\W_])_+([^\W_])|([^\W_]+)|_+/\U$1\L$2/g', $str);
    return $str;
}

var_dump(test('the-Stealth-Warrior'));

var_dump(toCamelCaseBis('the-Stealth-Warrior'));
var_dump(toCamelCaseBis('The-Stealth-Warrior'));
var_dump(toCamelCaseBis('IAmAProgrammer'));*/