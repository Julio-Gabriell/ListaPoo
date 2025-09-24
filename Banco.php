<?php 

// Arquivo: Banco.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação da classe Conta com operações de depósito, saque e transferência entre contas, incluindo verificação de saldo e validação de valores.

class Conta
{
    public string $numero;
    public string $titular;
    public float $saldo;

    public function __construct(string $numero, string $titular)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = 0.0;
    }

    public function depositar(float $valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            return true;
        }
        return false;
    }

    public function sacar(float $valor)
    {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function transferir(float $valor, Conta $contaDestino)
    {
        if ($this->sacar($valor)) {
            if ($contaDestino->depositar($valor)) {
                echo "Sucesso na transferencia <br>";
                return true;
            } else {
                $this->depositar($valor);
            }
        }
        return false;
    }
}

$conta1 = new Conta("123", "Julio Gabriel");
$conta2 = new Conta("456", "Joao Pedro");

$conta1->depositar(500);
$conta2->depositar(300);

echo "Saldo conta1: " . $conta1->saldo . "<br>";
echo "Saldo conta2: " . $conta2->saldo . "<br>";

$conta1->transferir(100, $conta2);

echo "Saldo conta1: " . $conta1->saldo . "<br>";
echo "Saldo conta2: " . $conta2->saldo . "<br>";

?>