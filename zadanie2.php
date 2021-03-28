<?php

$array = array();

$array[0] = "qweitwe";
$array[1] = "qwrt";
$array[2] = "rfsdg";

$string = "r";

function ProblemTwo($arr, $prefix) {

    for($i = 0; $i < count($arr); $i++){
        if(mb_strpos($arr[$i], $prefix) === 0){
            echo $arr[$i]."<br>";
        }
    }
}

ProblemTwo($array, $string);

?>