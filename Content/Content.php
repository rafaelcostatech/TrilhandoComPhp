<?php
namespace Content;


class Content
{
    public $index = 1;
    public $empresa = 2;
    public $produtos = 3;
    public $servicos = 4;
    public $conteudo;
    
    public function __construct($parametro){

        if ($parametro == $this->index){
            $this->conteudo = include 'Content/index.txt';
        }
            
        elseif ($parametro == $this->empresa){
            $this->conteudo = include 'Content/empresa.txt';
        }
            
        elseif ($parametro == $this->produtos){
            $this->conteudo = include 'Content/produtos.txt';
        }
        
        else {$this->conteudo = include 'Content/servicos.txt';}
            }
    
        public function __toString() {
            return $this->conteudo;
        }
        
}