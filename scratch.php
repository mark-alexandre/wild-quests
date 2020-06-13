<?php

function inArray($array1, $array2) {
    $result = [];
    foreach ($array1 as $a) {
        foreach ($array2 as $b) {
            settype($a, 'string');
            settype($b, 'string');
            if (strpos($b, $a) && !in_array($a, $result)) {
                $result[] = $a;
            }
        }
    }
    $result = array_unique($result);
    sort($result);
    return $result;
}

function inArray($array1, $array2) {
    $result = array();
    foreach($array1 as $item1){
        foreach($array2 as $item2){
            if(strpos($item2,$item1)!==false){
                $result [] = $item1;
                break;
            }
        }
    }
    sort($result);
    return $result;
}

$a1 = ["arp", "9.2", "strong"];
$a2 = ["lively", "alive", "harp", "sharp", "armstrong"];
var_dump(inArray($a1, $a2));