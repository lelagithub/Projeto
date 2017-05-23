<?php

/**
 * Description of Veiculo
 *
 * @author PC 05
 */
class Veiculo {

    private $nome;
    private $cor;
    private $ano;
    protected $botao;
    
    function getNome() {
        return $this->nome;
    }

    function getCor() {
        return $this->cor;
    }

    function getAno() {
        return $this->ano;
    }

    function getBotao() {
        return $this->botao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }

    function setBotao($botao) {
        $this->botao = $botao;
    }

    
    function acelerar() {
        if ($this->botao == TRUE) {
            echo "<p>Ocarro está acelerando ...</>";
        } else {
            echo "<p>O carro está parado </p>";
        }
    }

    public function ligar() {
        $this->botao = TRUE;
    }

    public function desligar() {
        $this->botao = FALSE;
    }

    public function Veiculo($n,$c,$a){
        $this->nome = $n;
        $this->cor = $c;
        $this->ano = $a;
        $this->desligar();
        
    }
    

}
