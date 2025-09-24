<?php 

// Arquivo: Filme.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação da classe Filme com armazenamento de informações básicas (título, duração e classificação) e geração de uma descrição resumida.

    class Filme
    {
        public string $titulo;
        public int $duracaoMin;
        public string $classificacao;

        public function __construct(string $tituloFilme, int $duracacaoFilme, string $classificacaoFilme)
        {
            $this->titulo = $tituloFilme;
            $this->duracaoMin = $duracacaoFilme;
            $this->classificacao = $classificacaoFilme;
        }

        public function descricaoCurta()
        {
            return "$this->titulo - $this->duracaoMin min - Classificação: $this->classificacao <br>";
        }
    }

    $filme1 = new Filme("Avatar", 162, "12");
    echo $filme1->descricaoCurta();

    $filme2 = new Filme("Avatar: O caminho da agua", 192, "12");
    echo $filme2->descricaoCurta();

?>