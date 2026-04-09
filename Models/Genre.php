<?php
class Genre {
    public $nome;
    public $eta_minima;
    public $descrizione;

    public function __construct($nome, $eta_minima, $descrizione){
        $this->nome = $nome;
        $this->eta_minima = $eta_minima;
        $this->descrizione =$descrizione;
    }

    public function getGenre(){
        echo $this->nome ."<br>";
            echo $this->eta_minima ."<br>";
            echo $this->descrizione ."<br>";
          
    }
}