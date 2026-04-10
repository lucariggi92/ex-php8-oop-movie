<?php
class Genre {
    public $nome;
    public $eta_minima;


    public function __construct($nome, $eta_minima){
        $this->nome = $nome;
        $this->eta_minima = $eta_minima;
      
    }

    public function getGenre(){
        echo $this->nome ."<br>";
            echo $this->eta_minima ."<br>";
           
          
    }
}