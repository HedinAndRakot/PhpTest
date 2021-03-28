<?php
    $year = $_POST['year'];
    if ((is_int($year) || ctype_digit($year)) && (int)$year >= 0 ){
        if((($year % 4) == 0) && (($year % 100) != 0)){
            echo "ДА";
        } else {
            echo "НЕТ";
        }
    } else{
        echo "ОШИБКА ВО ВХОДНЫХ ДАННЫХ";
    }
?>