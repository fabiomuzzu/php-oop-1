<?php 
    // Definizione classe Movie
    class Movie{
        public $title;
        public $genre;
        public $year;
        public $rate;
        public $director;
        public $production;

        // Creazione della funzione construct a cui passerò i parametri di director e production
        function __construct($_director, $_production)
        {
            $this->director = $_director;
            $this->production = $_production;
        }
    }

    // Creo una istanza della classe movie
    $movie_1 = new Movie("Chris Columbus", "David Heyman");

    // Assegno dei valori agli attributi dell'istanza movie
    $movie_1->title = "Harry Potter e la pietra filosofale";
    $movie_1->genre = "Fantasy";
    $movie_1->year = 2001;
    $movie_1->rate = 5;
    
    var_dump($movie_1);
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