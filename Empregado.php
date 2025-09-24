<?php 

// Arquivo: Empregado.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação da classe Empregado com cálculo do salário anual e tratamento de salários mensais não positivos.

    class Empregado
    {
       public string $nome; 
       public string $sobrenome; 
       public string $setor; 
       public float $salarioMensal;
       
       public function __construct(string $nomeEmpregado, string $sobrenomeEmpregado, string $setorEmpregado, float $salarioMensalEmpregado)
       {
            $this->nome = $nomeEmpregado;
            $this->sobrenome = $sobrenomeEmpregado;
            $this->setor = $setorEmpregado;
            $this->salarioMensal = $salarioMensalEmpregado;

            if ($salarioMensalEmpregado <= 0){
                $salarioMensalEmpregado = 0.0;
            }
       }

       public function salarioAnual()
       {
        echo "O salario anual do trabalhador " . $this->nome . " é " . number_format($this->salarioMensal * 12, 1, '.', ',') . "<br>";
       }
    }

    $trabalhador1 = new Empregado("Julio", "Gabriel", "T.I", 760);
    $trabalhador1->salarioAnual();

    $trabalhador2 = new Empregado("Luiz", "Barbosa", "Educação", 0);
    $trabalhador2->salarioAnual();
?>