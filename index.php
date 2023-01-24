<?php
// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà


include_once __DIR__ .'/classi/movie.php';


// _______________________modo 1
$movie1 = new Movie('Harry Potter e la pietra filosofale', 2001, 'fantasy', 7, 'https://picsum.photos/200/300');

$movie2 = new Movie('Old', 2021, 'thriller, drammatico,giallo', 18, 'https://picsum.photos/200/300');

echo $movie1-> title;
echo "<br>";
echo $movie1-> year;
echo "<br>";
echo $movie1-> genre;
echo "<br>";
echo $movie1-> year;
echo "<br>";

// echo $movie1-> image;
// echo "<img src='https://picsum.photos/200/300' alt='copertina film harry potter'>";

echo "<img src='$movie1->image' alt='copertina film'>";
echo "<br>";

// per utima la funzione
echo $movie1-> perTutti();
echo "<br>";


// secondo film
echo $movie2-> title;
echo "<br>";
echo $movie2-> year;
echo "<br>";
echo $movie2-> genre;
echo "<br>";
echo $movie2-> year;
echo "<br>";

// echo $movie1-> image;
// echo "<img src='https://picsum.photos/200/300' alt='copertina film harry potter'>";

echo "<img src='$movie1->image' alt='copertina film'>";
echo "<br>";

// per utima la funzione
echo $movie2-> perTutti();
echo "<br>";



?>