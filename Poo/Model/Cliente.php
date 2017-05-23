<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author PC 12
 */
class Cliente {
   
    private $nome;
    private $cidade;
    private $estado;
    public function getNome() {
        return $this->nome;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function __construct() {
        
    }

}
