<?php
class Movie{
// attributi
public $title;
public $year;
public $genre;
public $age;
public $image; 

// il costruttore
public function __construct($title, $year, $genre, $age,$image)
{
    $this->title = $title;
    $this->year = $year;
    $this->genre = $genre;
    $this->age = $age;
    $this->image = $image;
}

// metodo
public function perTutti(){
    if($this-> age < 18){
        return "La visione è stata autorizzat🟩";
    } else {
        return "La visione del film è riservata solo ad un pubblico adulto 🔞";
    }

}

}

?>