<?php 

// Arquivo: Cartao.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação da classe Cartão com controle de limite e fatura, permitindo realizar compras com verificação de saldo disponível e atualização da fatura.

    class Cartao
    {
        public string $banco;
        public string $bandeira;
        public float $limite;
        public float $fatura;
        

        public function __construct(string $bancoCartao, string $bandeiraCartao, float $limiteCartao)
        {
            $this->banco = $bancoCartao;    
            $this->bandeira = $bandeiraCartao;    
            $this->limite = $limiteCartao;  
            $this->fatura = 0;  
        }


        public function fazerCompra($valor, $cartao)
        {
            if ($valor <= ($this->limite - $this->fatura)) {
                $this->fatura += $valor;
                echo "A compra de $valor foi aprovada. Fatura: " . $cartao->totalFatura();
                return true;
            } else {
                echo "Seu limite acabou. Fatura: " . $cartao->totalFatura();
                return false;
            }
        }

        public function totalFatura()
        {
            return $this->fatura . "<br>";
        }
    }

    $cartao1 = new Cartao("Inter", "mastercard", 700);
    $cartao1->fazerCompra(150, $cartao1);
    

    $cartao1->fazerCompra(150, $cartao1);

    $cartao1->fazerCompra(150, $cartao1);

    $cartao1->fazerCompra(250, $cartao1);

    $cartao1->fazerCompra(250, $cartao1);
?>