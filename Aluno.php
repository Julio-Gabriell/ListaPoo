<?php 

// Arquivo: Aluno.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação da classe Aluno com cálculo de média das notas e verificação da situação acadêmica (Aprovado, Exame ou Reprovado).
    class Aluno
    {
        public string $nome; 
       public int $ra; 
       public string $disciplina;
       public float $notaP1;
       public float $notaP2;

       public function __construct(string $nomeAluno, int $raAluno, string $disciplinaAluno)
       {
            $this->nome = $nomeAluno;    
            $this->ra = $raAluno;    
            $this->disciplina = $disciplinaAluno;  
        }
       public function calcularMedia( float $notaP1Aluno, float $notaP2Aluno)
       {
            $this->notaP1 = $notaP1Aluno;
            $this->notaP2 = $notaP2Aluno;  
            return $mediaAluno = ($this->notaP1 + $this->notaP2) / 2;
       }

       public function situacao()
       {
            $mediaAluno = $this->calcularMedia($this->notaP1, $this->notaP2);

            if ( $mediaAluno >= 7 ) {
                return "$this->nome esta Aprovado <br>";
            } elseif ( $mediaAluno >= 5 ) {
                return "$this->nome esta de Exame <br>";
            } else {
                return "$this->nome esta reprovado <br>"; 
            }
       }
    }

    $aluno1 = new Aluno("Julio gabriel", 123, "POO");
    $aluno1->calcularMedia(10, 10);
    echo $aluno1->situacao();

    $aluno2 = new Aluno("Joao Pedro", 345, "POO");
    $aluno2->calcularMedia(6, 6);
    echo $aluno2->situacao();

?>