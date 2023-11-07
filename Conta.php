<?php
class Conta{ 
    private $numero; 
    private $nome; 
    private $saldo; 
    public function __construct(int $numero, string $nome, float $saldo){ 
        $this->setNumero($numero); 
        $this->setNome($nome); 
        $this->setSaldo($saldo); 
    } 
    public function setNumero($numero) {
        $this->numero = $numero;
    } 
    public function getNumero() {
        return $this->numero;
    } 
    public function setNome($nome){
        $this->nome = $nome;
    } 
    public function getNome(){
        return $this->nome;
    } 
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    } 
    public function getSaldo(){
        return $this->saldo;
    } 
    public function getConta(){ 
        $this->getNumero();
        $this->getNome(); 
        $this->getSaldo(); 
    } 
} 
?>