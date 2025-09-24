<?php 

// Arquivo: Vendedor.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação da classe Vendedor com controle de vendas, cálculo de comissão e determinação do salário total mensal.

    class Vendedor
    {
        public string $nome;
        public string $email;
        public float $salarioBase;
        public float $percentualComissao;
        public float $totalVendido;

        public function __construct(string $nomeVendedor, string $emailVendedor, float $salarioBaseVendedor, float $percentualComissaoVendedor)
        {
            $this->nome = $nomeVendedor;
            $this->email = $emailVendedor;
            $this->salarioBase = $salarioBaseVendedor;
            $this->percentualComissao = $percentualComissaoVendedor;
        }

        public function fazerVenda($valor)
        {
            $this->totalVendido = 0;

            if ($valor > 0) {
                $this->totalVendido += $valor;
                echo "Venda no valor de $valor realizada <br>";
                return true;
            } else {
                echo "Venda negada <br>";
                return false;
            }
        }

        public function salarioTotal()
        {
            $percentual = $this->percentualComissao;
            return "O salario do mês vai ser: " . $this->salarioBase + ($this->totalVendido * $percentual);
        }
    }

    $vendedor = new Vendedor("Julio Gabriel", "paespintoj@gmail.com", 1200, 5);

    $vendedor->fazerVenda(3000);
    $vendedor->fazerVenda(1200);
    $vendedor->fazerVenda(0);
    $vendedor->fazerVenda(2500);

    echo $vendedor->salarioTotal();
?>