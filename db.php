<?php
require_once "./Traits/Disponibilità.php";
require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

// Generi
$azione = new Genre("Azione", 14, "Film ricchi di adrenalina");
$avventura = new Genre("Avventura", 12, "Film d'avventura");
$fantascienza = new Genre("Fantascienza", 12, "Film di fantascienza");
$storico = new Genre("Storico", 13, "Film ambientato nel passato");
$guerra = new Genre("Guerra", 16, "Film di guerra");
$thriller = new Genre("Thriller", 16, "Film suspense e tensione");
$horror = new Genre("Horror", 18, "Film dell'orrore");
$commedia = new Genre("Commedia", 6, "Film comici e leggeri");
$drammatico = new Genre("Drammatico", 13, "Film drammatici");
$animazione = new Genre("Animazione", 0, "Film d'animazione")


// Film
$movies = [
    new Movie("Inception", "inception.jpg", "Christopher Nolan", 2010, 148, [$fantascienza, $thriller], "On Demand"),
    new Movie("Il Gladiatore", "gladiatore.jpg", "Ridley Scott", 2000, 155, [$storico, $azione], "On Demand"),
    new Movie("Interstellar", "interstellar.jpg", "Christopher Nolan", 2014, 169, [$fantascienza, $avventura], "On Demand"),
    new Movie("The Dark Knight", "darkknight.jpg", "Christopher Nolan", 2008, 152, [$azione, $thriller], "On Demand"),
    new Movie("Saving Private Ryan", "privatryan.jpg", "Steven Spielberg", 1998, 169, [$guerra, $drammatico], "Al Cinema"),
    new Movie("The Shining", "shining.jpg", "Stanley Kubrick", 1980, 146, [$horror, $thriller], "On Demand"),
    new Movie("Forrest Gump", "forrestgump.jpg", "Robert Zemeckis", 1994, 142, [$drammatico, $commedia], "On Demand"),
    new Movie("The Lion King", "lionking.jpg", "Roger Allers", 1994, 88, [$animazione, $avventura], "On Demand"),
    new Movie("Schindler's List", "schindler.jpg", "Steven Spielberg", 1993, 195, [$storico, $drammatico], "Al Cinema"),
    new Movie("Pulp Fiction", "pulpfiction.jpg", "Quentin Tarantino", 1994, 154, [$thriller, $commedia], "On Demand"),
    new Movie("The Matrix", "matrix.jpg", "Lana Wachowski", 1999, 136, [$fantascienza, $azione], "Al Cinema"),
    new Movie("Up", "up.jpg", "Pete Docter", 2009, 96, [$animazione, $avventura], "On Demand"),
];