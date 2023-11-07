<?php
class Cliente extends Conta {
    private $nomeCliente;
    private $idade;
    private $genero;
    
    public function __construct(int $numero, string $nome, float $saldo, string $nomeCliente, int $idade, string $genero) {
        parent::__construct($numero, $nome, $saldo);
        $this->setNomeCliente($nomeCliente);
        $this->setIdade($idade);
        $this->setGenero($genero);
    }

    public function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente; 
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setGenero($genero) {
        $this->genero = $genero;
    }
    public function getNomeCliente() {
        return $this->nomeCliente;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getGenero() {
        return $this->genero;
    }
}
?>