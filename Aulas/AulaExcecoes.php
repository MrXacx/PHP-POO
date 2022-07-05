<?php

/* 
throw new Exception("Exceção");
echo "\n ... executando ...\n"; // Não executa. Fatal error.
*/

function devolveErro (){
    throw new Exception("Exceção");
}

$status = false;

try{ // Tenta executar devolveErro()
    devolveErro();
} Catch (Exception $e) { // Executa se devolveErro() retornar uma Exception
    echo $e -> getMessage() . PHP_EOL; // Exibe mensagem
} Finally{ //Executa após catch e/ou try
    echo "Status de operação: " . (int)$status;
    die(); // Aborta código

}

echo "\n ... executando ...\n"; // Executa
?>