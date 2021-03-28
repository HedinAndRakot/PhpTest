<?php

$hipp = 7;

$kokt = 39;

function ProblemThree($n, $m) {

    if (((is_int($n) || ctype_digit($n)) && (int)$n >= 0 ) && ((is_int($m) || ctype_digit($m)) && (int)$m >= 0 ) ){
        
        echo (int)($m/$n)."<br>";

    } else{

        echo "ОШИБКА ВО ВХОДНЫХ ДАННЫХ <br>";

    }
}

ProblemThree($hipp,$kokt);
?>