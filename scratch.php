<?php
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
var_dump(toCamelCaseBis('IAmAProgrammer'));