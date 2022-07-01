<?php
declare (strict_type = 1);

function validaDados (string $date, float $amount1, float $amount2, float $amount3) :bool {
    if (empty($date) OR empty($amount1) OR empty($amount2) OR empty($amount3)){
        return false;
    }
    if ( !is_numeric($amount1) OR !is_numeric($amount2) OR !is_numeric($amount3)){
        return false;
    }
    else{
        return true;
    }
}
?>