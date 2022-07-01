<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'On');

function imprimeMessageCorrect ($dados) {
    $_SESSION['alert'] =  $dados -> obterDate() . $dados -> obterName() . $dados -> obterAmount() . $dados -> obterValorTotal();
}
function imprimeMessageFail () :void {
    $_SESSION['alert'] = "Adicione dados válidos.";
}
function obterMessage(){
    if(!empty($_SESSION['alert'])){
        return $_SESSION['alert'];
    }
    else{
        return null;
    }
}
function removerMessage(){
    if(isset( $_SESSION['alert'])){
        unset( $_SESSION['alert']);
    }
    return null;
}
?>