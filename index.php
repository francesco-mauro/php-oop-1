<?php

require_once 'Movie.php';
require_once 'Genere.php';

// ----------------- generi-------------------
$genere1 = new Genere("Azione");
$genere2 = new Genere("Commedia");

//---------------------- film--------
$movie1 = new Movie("Luca 1", 120, $genere1);
$movie2 = new Movie("Loris", 90, $genere2);

// ---------------------------------Stampare le proprietà ---------------------------------
echo "Titolo: " . $movie1->getTitle() . "\n";
echo "Durata: " . $movie1->getDuration() . " minuti\n";
echo "Genere: " . $movie1->getGenre()->getName() . "\n";

echo "\n";

echo "Titolo: " . $movie2->getTitle() . "\n";
echo "Durata: " . $movie2->getDuration() . " minuti\n";
echo "Genere: " . $movie2->getGenre()->getName() . "\n";

?>
