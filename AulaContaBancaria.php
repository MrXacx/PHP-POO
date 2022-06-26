<?php

declare (strict_types = 1);

class ContaBancaria{ // Cria classe

    private string $banco = "Santander"; // Atributos da classe
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo){ // Excutada assim que o objeto é criado
        $this -> banco = $banco;
        $this -> nomeTitular = $nomeTitular;
        $this -> numeroAgencia = $numeroAgencia;
        $this -> numeroConta = $numeroConta;
        $this -> saldo = $saldo;
    }
    public function depositarSaldo(float $valor) : string {
        $this -> saldo += $valor;
        return "Depósito de R$ " . $valor . " realizado com sucesso.";
    }
    public function sacarSaldo(float $valor) : string {
        $this -> saldo -= $valor;
        return "Saque de R$ " . $valor . " realizado com sucesso.";
    }
    public function obterSaldo() : string { //Deve ser chamada fora da classe
        return "Olá, seu saldo é R$ " . $this -> saldo . "!";
    }


}

$conta = new ContaBancaria(
    "Santander", // Banco
    "Mister Xacx", // nomeTitular
    "1406", // numeroAgencia
    "154892-97", // numeroConta
    1000,00, // saldo
); //Cria o objeto da classe

// var_dump($conta); // Expõe atributos da classe
// var_dump($conta -> saldo); // Expõe atributo específico da clasee

echo $conta -> obterSaldo(); // Expõe método

echo PHP_EOL;

echo $conta -> depositarSaldo(500);

echo PHP_EOL;

echo $conta -> obterSaldo(); 

echo PHP_EOL;

echo $conta -> sacarSaldo(231);

echo PHP_EOL;

echo $conta -> obterSaldo(); 