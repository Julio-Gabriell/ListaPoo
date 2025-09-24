<?php

// Arquivo: Disciplina.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação da classe Disciplina com cálculo de média ponderada de notas e determinação da situação acadêmica (Aprovado, Exame ou Reprovado).

class Disciplina
{
    public string $nome;
    public float $notaTrabalho;
    public float $notaProva;

    public function __construct(string $nomeDisciplina, float $notaTrabalhoDisciplina, float $notaProvaDisciplina)
    {
        $this->nome = $nomeDisciplina;
        $this->notaTrabalho = $notaTrabalhoDisciplina;
        $this->notaProva = $notaProvaDisciplina;
    }

    public function calcularMediaPonderada()
    {
        return ($this->notaTrabalho * 0.4) + ($this->notaProva * 0.6);
    }

    public function situacao()
    {
        $media = $this->calcularMediaPonderada();

        if ($media >= 7) {
            return "Aprovado";
        } elseif ($media >= 5) {
            return "Exame";
        } else {
            return "Reprovado";
        }
    }
}

$disciplina1 = new Disciplina("POO", 8.0, 7.0);
$disciplina2 = new Disciplina("Banco de Dados", 9.0, 10.0);

echo "Disciplina: " . $disciplina1->nome . "<br>";
echo "Média: " . $disciplina1->calcularMediaPonderada() . "<br>";
echo "Situação: " . $disciplina1->situacao() . "<br><br>";

echo "Disciplina: " . $disciplina2->nome . "<br>";
echo "Média: " . $disciplina2->calcularMediaPonderada() . "<br>";
echo "Situação: " . $disciplina2->situacao() . "<br>";

?>