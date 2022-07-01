<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

include "./TabelaPrecos.php"; //Pega daddos
include "./Venda.php"; // Pega dados
include "./Message.php"; // Pega dados
include "./Validacao.php"; // Envia dados


//declare(strict_type = 1);

$date = $_GET["date"];
$amount1 = $_GET["tomato"];
$amount2 = $_GET["potato"];
$amount3 = $_GET["watermelon"];
$valorTomato = $valor["tomato"];
$valorPotato = $valor["potato"];
$valorWatermelon = $valor["watermelon"];

if (validaDados($date, $amount1, $amount2, $amount3)){
    $dados = new venda (
        $date,
        $amount1,
        $amount2,
        $amount3,
        $valorTomato,
        $valorPotato,
        $valorWatermelon,
    );
    imprimeMessageCorrect($dados);
}
else{
    imprimeMessageFail();
}


header ("location: http://127.0.0.1/My%20Archives/PHP-POO/ExercicioAula01/");


?>