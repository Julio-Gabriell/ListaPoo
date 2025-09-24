<?php

// Arquivo: Livro.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação da classe Livro com controle do número de páginas lidas e cálculo do progresso de leitura em percentual.

    class Livro
    {
        public string $titulo;
        public int $paginas;
        public int $paginasLidas;

        public function __construct(string $tituloLivro, int $paginasLivro)
        {
            $this->titulo = $tituloLivro;
            $this->paginas = $paginasLivro;
            $this->paginasLidas = 0;
        }

        public function verificarProgresso($paginasLidas){
            if ($paginasLidas > $this->paginas) {
                echo "Você já acabou o livro";
                $paginasLidas = $this->paginas;
                return true;
            } else {
                return number_format(($paginasLidas / $this->paginas) * 100, 1, ".", ",");
            }
        }
    }

    $livro1 = new Livro("Quarto de Despejo: Diário de uma favelada", 239);
    echo $livro1->verificarProgresso(199);

    $livro2 = new Livro("Ultra Aprendizado", 308);
    echo $livro2->verificarProgresso(105);

    $livro3 = new Livro("Vidas Secas", 148);
    echo $livro3->verificarProgresso(27);
?>
