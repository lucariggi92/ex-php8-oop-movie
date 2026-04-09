<?php

class Movie {
    public $titolo;
    public $cover;
    public $regista;
    public $anno_di_uscita;
    public $durata;
    public $genere;

    public function __construct($titolo, $cover, $regista, $anno_di_uscita, $durata, $genere){
    $this->titolo = $titolo;
     $this->cover = $cover;
        $this->regista= $regista;
         $this->anno_di_uscita= $anno_di_uscita;
        $this->durata = $durata;
         $this->genere = $genere;

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


        }

}

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


$genere1 = new Genre("Fantascienza", 12, "Film di fantascienza");

$genere2 = new Genre("Storico", 13, "Film Storico");

$genere3 = new Genre("Avventura", 14, "Film d'avventura");
$genere4 = new Genre("Guerra", 15, "Film di guerra");


$film1 = new Movie("inception", "cover1.jpg", "Nolan", 2010, 148, [$genere1, $genere3]);

$film2 = new Movie("Gladiatore", "cover2.jpg", "Scott", 2000, 120, [$genere2, $genere4]);



$film1->getMovie();
$film2->getMovie();

var_dump($film1);
var_dump($film2);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   
    <div class= "container-fluid py-3">
        <h1>Movie</h1>
    </div>

</body>
</html>