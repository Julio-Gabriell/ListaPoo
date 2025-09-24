<?php 

// Arquivo: Terreno.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação da classe Terreno com cálculo da área e do preço total com base no valor por metro quadrado.

    class Terreno
    {
        public float $largura;
        public float $comprimento;
        public float $precoPorMetro;

        public function __construct(float $larguraTerreno, float $comprimentoTerreno, float $precoPorMetroTerreno)
        {
            $this->largura = $larguraTerreno;
            $this->comprimento = $comprimentoTerreno;
            $this->precoPorMetro = $precoPorMetroTerreno;
        }

        public function area(){
            return $this->largura * $this->comprimento;
        }
        public function precoTotal($terreno){
            return "A area do terreno é: " . $terreno->area() . "O preço do terreno é: " . $terreno->area() * $this->precoPorMetro . "<br>";
        }

    }

    $terreno1 = new Terreno(5, 5, 5);
    $terreno1->area();
    echo $terreno1->precoTotal($terreno1);

    $terreno2 = new Terreno(3, 4, 20);
    $terreno2->area();
    echo $terreno2->precoTotal($terreno2);
?>