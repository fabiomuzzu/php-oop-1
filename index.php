<?php 
    // Definizione classe Movie
    class Movie{
        public $title;
        public $genre;
        public $year;
        public $score;
        public $director;
        public $production;

        // Creazione della funzione construct a cui passerò i parametri di director e production
        function __construct($_title, $_year, $_director, $_production)
        {
            $this->title = $_title;
            $this->year = $_year;
            $this->director = $_director;
            $this->production = $_production;
        }
        
        // Funzione per dare un punteggio a score
        public function setScore($filmscore){
            $this->score = $filmscore;
        }
    }

    // Creo una istanza della classe movie
    $movie_1 = new Movie("Harry Potter e la pietra filosofale", "2001", "Chris Columbus", "David Heyman");
    $movie_2 = new Movie("Harry Potter e la camera dei segreti", "2002", "Chris Columbus", "David Heyman");

    // Assegno dei valori agli attributi dell'istanza movie
    $movie_1->genre = "Fantasy";
    $movie_1->setScore(90);
    $movie_2->genre = "Fantasy";
    $movie_2->setScore(70);

    $films = [$movie_1, $movie_2];
    var_dump($films);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Of Class</title>
</head>
<body>
    
</body>
</html>