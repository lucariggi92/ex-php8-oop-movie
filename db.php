<?php
require_once "./Traits/Disponibilità.php";
require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

// Generi
$azione = new Genre("Azione", 14);
$avventura = new Genre("Avventura", 12);
$fantascienza = new Genre("Fantascienza", 12);
$storico = new Genre("Storico", 13);
$guerra = new Genre("Guerra", 16);
$thriller = new Genre("Thriller", 16);
$horror = new Genre("Horror", 18);
$commedia = new Genre("Commedia", 6);
$drammatico = new Genre("Drammatico", 13);
$animazione = new Genre("Animazione", 0);


// Film
$movies = [
    new Movie("Inception", "./img/inception.jpg", "Christopher Nolan", 2010, 148, [$fantascienza, $thriller], "On Demand"),
    new Movie("Il Gladiatore", "./img/gladiatore.jpg", "Ridley Scott", 2000, 155, [$storico, $azione], "A Pagamento"),
    new Movie("Interstellar", "./img/interstellar.jpg", "Christopher Nolan", 2014, 169, [$fantascienza, $avventura], "A Pagamento"),
    new Movie("The Dark Knight", "./img/darkknight.jpg", "Christopher Nolan", 2008, 152, [$azione, $thriller], "On Demand"),
    new Movie("Saving Private Ryan", "./img/soldato_ryan.jpg", "Steven Spielberg", 1998, 169, [$guerra, $drammatico], "A Pagamento"),
       new Movie("Forrest Gump", "./img/forrestgump.jpg", "Robert Zemeckis", 1994, 142, [$drammatico, $commedia], "On Demand"),
    new Movie("The Lion King", "./img/releone.jpg", "Roger Allers", 1994, 88, [$animazione, $avventura], "On Demand"),
        new Movie("Pulp Fiction", "./img/pulpfiction.jpg", "Quentin Tarantino", 1994, 154, [$thriller, $commedia], "On Demand"),
    new Movie("The Matrix", "./img/matrix.jpg", "Lana Wachowski", 1999, 136, [$fantascienza, $azione], "A Pagamento"),
    new Movie("Up", "./img/up.jpg", "Pete Docter", 2009, 96, [$animazione, $avventura], "On Demand"),
];