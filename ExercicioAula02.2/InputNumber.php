<?php
include "Divisao.php";

$n1 = 0;
$n2 = 2;

try{
    $_SESSION['result'] = $n1 . " / " . $n2 . " = " . divisao($n1, $n2);
} catch (Exception $e){
    $_SESSION['result'] = $e -> getMessage();
}
echo $_SESSION['result'];
?>