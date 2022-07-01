<?php
declare (strict_type = 1);

error_reporting(E_ALL);
ini_set('display_errors', 'On');

class venda {
    private string $date;
    private string $name;
    private float $amount;
    private float $valor1;
    private float $valor2;
    private float $valor3;
    private float $valorTotal;

    public function __construct (string $date, float $amount1, float $amount2, float $amount3, float $valorTomato, float $valorPotato, float $valorWatermelon){
        $this -> date = $date;
        $this -> amount = $amount1 + $amount2 + $amount3;
        $this -> valor1 = $valorTomato * $amount1;
        $this -> valor2 = $valorPotato * $amount2;
        $this -> valor3 = $valorWatermelon * $amount3;
    }
    public function obterDate() :string {
        return "<b>Data de entrega:</b> " . $this -> date . "<br>";
    }
    public function obterName() :string {
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
    public function obterAmount() :string {
        return "<b>Quantidade:</b> " . $this -> amount . "<br>";
    }
    public function obterValorTotal() :string {
        $this -> valorTotal = ($this -> valor1) + ($this -> valor2) + ($this -> valor3);    
        return "<b>Valor a pagar:</b> R$ " .  $this -> valorTotal;
    }
}
?>