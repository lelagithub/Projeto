<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Telefone
 *
 * @author PC 12
 */
require_once 'Controle.php';
class Telefone implements Controle{
    //put your code here
    
    private $botaoLigar;
    private $botaoVolume;
    private $botaoMenu;
    
    public function __construct() {
        $this->botaoLigar = FALSE;
        $this->botaoVolume = 10;
        $this->botaoMenu = FALSE;
    }
    public function getBotaoLigar() {
        return $this->botaoLigar;
    }

    public function getBotaoVolume() {
        return $this->botaoVolume;
    }

    public function getBotaoMenu() {
        return $this->botaoMenu;
    }

    public function setBotaoLigar($botaoLigar) {
        $this->botaoLigar = $botaoLigar;
    }

    public function setBotaoVolume($botaoVolume) {
        $this->botaoVolume = $botaoVolume;
    }

    public function setBotaoMenu($botaoMenu) {
        $this->botaoMenu = $botaoMenu;
    }

    public function abrirMenu() {
        if($this->getBotaoLigar()==TRUE){
            echo "<p>O bootão do menu foi adicionado!</p>";
            echo "<p>Você selecionou o aplicativo de contatos</p>";
            
        } else {
            echo "<p>O botão do menu não pode ser acionado, pois o telefone está desligado!</p>";
            
        }
    }

    public function desligar() {
          $this->setBotaoLigar(FALSE);
    }

    public function fecharMenu() {
        echo "<p>O botão do menu foi fechado!</p>";
    }

    public function ligar() {
        $this->setBotaoLigar(TRUE);
    }

    public function maisVolume() {
        if($this->getBotaoLigar()==TRUE){
            $this->getBotaoVolume($this->getBotaoVolume()+1);
            echo "<p>O volume aumentou para".$this->getBotaoVolume();"</p>";
        } else {
            echo "<p>O botão de volume não pode aumentar, pois o telefone está desligado!</p>";
        }
    }

    public function menosVolume() {
         if($this->getBotaoLigar()==TRUE){
            $this->getBotaoVolume($this->getBotaoVolume()-1);
            echo "<p>O volume diminuiu para".$this->getBotaoVolume();"</p>";
        } else {
            echo "<p>O botão de volume não pode diminiuir, pois o telefone está desligado!</p>";
        }
    }

}
