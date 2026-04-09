<?php
class Movie {
    use Disponibilità;


    public $titolo;
    public $cover;
    public $regista;
    public $anno_di_uscita;
    public $durata;
    public $genere;

    public function __construct($titolo, $cover, $regista, $anno_di_uscita, $durata, $genere, $disponibilità){
    $this->titolo = $titolo;
     $this->cover = $cover;
        $this->regista= $regista;
         $this->anno_di_uscita= $anno_di_uscita;
        $this->durata = $durata;
         $this->genere = $genere;
         $this->disponibilità = $disponibilità;

    }

        public function getMovie() {
            echo $this->titolo ."<br>";
            echo $this->cover ."<br>";
            echo $this->regista ."<br>";
            echo $this->anno_di_uscita ."<br>";
            echo $this->durata ."<br>";
            foreach($this->genere as $elemento){
                $elemento->getGenre();                        
            };
             echo $this->GetDisponibilità();   


        }

    
    

}