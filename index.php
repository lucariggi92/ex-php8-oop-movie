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
            echo $this->genere ."<br>";


        }

}





$film1 = new Movie("inception", "cover1.jpg", "Nolan", 2010, 148, "Fantascienza");

$film2 = new Movie("Gladiatore", "cover2.jpg", "Scott", 2000, 120, "Storico");

$film1->getMovie();
$film2->getMovie();


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