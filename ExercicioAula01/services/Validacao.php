<?php
function validaDados ($date, $amount1, $amount2, $amount3){
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