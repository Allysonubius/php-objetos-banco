<?php
/*Created by Visual Studio Code
    Name: Allyson
    Date: 10/06/2020
    PHP version 7.4
*/
declare(strict_types=1);
//Classe
class ContaBancaria 
{
    private string $banco;
    /**
     * @var string //PHP 7.3
    */
    private string  $nomeTitular;
    /**
     * @var string //PHP 7.3
    */
    private string  $numeroAgencia;
    /**
     * @var string //PHP 7.3
    */
    private string  $numeroConta;
    /**
     * @var string //PHP 7.3
    */
    private float $saldo;
    /**
     * @var float //PHP 7.3
    */
    //Construtor
    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo)
    {
        $this -> banco = $banco;
        $this -> nomeTitular = $nomeTitular;
        $this -> numeroAgencia = $numeroAgencia;
        $this -> numeroConta = $numeroConta;
        $this -> saldo = $saldo;
    }
    //Metodo verificar saldo atual
    public function obterSaldo() : string
    {
        return 'Seu saldo atual é R$ '.$this -> saldo;
    }
    //Metodo deposito
    public function depositar(float $valor ) : string
    {
        $this -> saldo += $valor;
        return 'Depósito de R$ '.$valor.' realizado realizado com sucesso.';
    }
    //Metodo saque
    public function sacar(float $valor) : string
    {
        $this -> saldo -= $valor;
        return 'Saque de R$ '.$valor.' realizado com sucesso.';
    }
}
//Variavel Objeto Contas ...
$conta1 = new ContaBancaria(
    //banco
    'BRB',
    //nomeTitular
    'Allyson',
    //numeroAgencia
    '1245',
    //numeroConta
    '784523-8',
    //saldo
    300.00
);
$conta2 =  new ContaBancaria(
    //banco
    'BRB',
    //nomeTitular
    'Joana',
    //numeroAgencia
    '1245',
    //numeroConta
    '457866-8',
    //saldo
    500.00
);

/*
//Impressão de metodos
echo $conta -> obterSaldo();//Antes do deposito
echo PHP_EOL;//quebra de linha
echo $conta -> sacar (50.00);//Sacar dinheiro
echo PHP_EOL;//quebra de linha
echo $conta -> obterSaldo();//valor apos deposito
*/
//Impressão contas
var_dump($conta1);
var_dump($conta2);
?>