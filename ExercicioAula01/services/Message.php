<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'On');

function imprimeMessageCorrect ($dados) :void {
    $_SESSION['alert'] =  $dados -> obterDate() . $dados -> obterName() . $dados -> obterAmount() . $dados -> obterValorTotal();
}
function imprimeMessageFail () :void {
    $_SESSION['alert'] = "Adicione dados válidos.";
}
function obterMessage() :?string{
    if(!empty($_SESSION['alert'])){
        return $_SESSION['alert'];
    }
    else{
        return null;
    }
}
?>