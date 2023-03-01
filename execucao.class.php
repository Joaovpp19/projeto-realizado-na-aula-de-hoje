<?php
//importação
require_once("pessoaclass.php");

class Teste{
     private $pessoa;
     //objeto chamado pessoa recebe a classe pessoa
     public function __construct(){
        //passar um valor
         $pessoa = new Pessoa();

         $pessoa->setNome("João Vitor");
         echo $pessoa->getNome();

    }
}new Teste();

?>