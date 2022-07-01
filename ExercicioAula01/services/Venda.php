<?php
// declare (strict_type = 1);
error_reporting(E_ALL);
ini_set('display_errors', 'On');
class venda {
    private $date;
    private $name;
    private $amount;
    private $valor1;
    private $valor2;
    private $valor3;
    private $valorTotal;

    public function __construct ($date,$amount1, $amount2, $amount3, $valorTomato, $valorPotato, $valorWatermelon){
        $this -> date = $date;
        $this -> amount = $amount1 + $amount2 + $amount3;
        $this -> valor1 = $valorTomato * $amount1;
        $this -> valor2 = $valorPotato * $amount2;
        $this -> valor3 = $valorWatermelon * $amount3;
    }
    public function obterDate() {
        return "<b>Data de entrega:</b> " . $this -> date . "<br>";
    }
    public function obterName() {
        if($this -> valor1 > 0){
            $name1 = "Tomate;";
        }
        if($this -> valor2 > 0){
            $name2 = "Batata;";
        }
        if($this -> valor3 > 0){
            $name3 = "Melancia;";
        }
        $this -> name = $name1 . $name2 . $name3;
        return "<b>Produtos selecionados:</b> " .  $this-> name . "<br>";
    }
    public function obterAmount() {
        return "<b>Quantidade:</b> " . $this -> amount . "<br>";
    }
    public function obterValorTotal() {
        $this -> valorTotal = ($this -> valor1) + ($this -> valor2) + ($this -> valor3);    
        return "<b>Valor a pagar:</b> R$ " .  $this -> valorTotal;
    }

}
?>