<?php
function divisao(float $n1, float $n2) {
    if ($n1 == 0 OR $n2 == 0){
        $message = "O número '0' não pode ser utilizado na operação de divisão."; 
        throw new Exception($message);
    }
    $result = $n1/$n2;
    return $result;
}
?>