<?php 

// Arquivo: Agenda.php
// Autor: Julio Gabriel Paes Pinto <2032945> – Turma 1 C ADS 2°
// Descrição: Implementação da agenda de compromissos com verificação de conflitos e cálculo de duração.

class Compromisso
{
    public string $titulo;
    public string $inicio; 
    public string $fim;

    public function __construct(string $tituloCompromisso, string $inicioCompromisso, string $fimCompromisso)
    {
        $this->titulo = $tituloCompromisso;
        $this->inicio = $inicioCompromisso;
        $this->fim = $fimCompromisso;
    }

    public function duracaoMin()
    {
        $iniciohora = explode(":", $this->inicio);
        $fimhora = explode(":", $this->fim);

        $inicioMin = intval($iniciohora[0]) * 60 + intval($iniciohora[1]);
        $fimMin = intval($fimhora[0]) * 60 + intval($fimhora[1]);

        return $fimMin - $inicioMin;
    }
}

class Agenda
{
    public array $compromissos = [];

    public function adicionar(Compromisso $novo)
    {
        $novoInicio = $this->horaParaMin($novo->inicio);
        $novoFim = $this->horaParaMin($novo->fim);

        foreach ($this->compromissos as $compromisso) {
            $inicio = $this->horaParaMin($compromisso->inicio);
            $fim = $this->horaParaMin($compromisso->fim);

            if (!($novoFim <= $inicio || $novoInicio >= $fim)) {
                return false;
            }
        }

        $this->compromissos[] = $novo;
        return true;
    }

    public function listar()
    {
        usort($this->compromissos, function ($compromisso1, $compromisso2) {
            return $this->horaParaMin($compromisso1->inicio) <=> $this->horaParaMin($compromisso2->inicio);
        });
        return $this->compromissos;
    }

    private function horaParaMin(string $hora)
    {
        [$hora, $minuto] = explode(":", $hora);
        return intval($hora) * 60 + intval($minuto);
    }
}


$agenda = new Agenda();

$compromisso1 = new Compromisso("Reunião", "09:00", "10:00");
$compromisso2 = new Compromisso("Consulta", "09:30", "10:30");
$compromisso3 = new Compromisso("Almoço", "12:00", "13:00");

echo "Adicionar Reunião: " . ($agenda->adicionar($compromisso1) ? "OK <br>" : "Falhou") ;
echo "Adicionar Consulta: " . ($agenda->adicionar($compromisso2) ? "OK <br>" : "Falhou <br>") ;
echo "Adicionar Almoço: " . ($agenda->adicionar($compromisso3) ? "OK <br>" : "Falhou <br>");

echo "Compromissos na agenda: <br>" ;
foreach ($agenda->listar() as $compromisso) {
    echo "- {$compromisso->titulo} ({$compromisso->inicio} - {$compromisso->fim}), duração: {$compromisso->duracaoMin()} min <br>" ;
}


?>