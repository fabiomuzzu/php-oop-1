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
    $movie_1->genre = ["Fantasy", "Avventura"];
    $movie_1->setScore(90);
    $movie_2->genre = ["Fantasy", "Avventura", "Fantastico"];
    $movie_2->setScore(70);

    $films = [$movie_1, $movie_2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Object Of Class</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled my-2 d-flex">
                    <?php foreach($films as $film) { ?>
                        <li class="py-2 mx-2">
                            <div class="card text-center">
                                <div class="card-header">
                                    Film
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "Nome: ".$film->title ?></h5>
                                    <p class="card-text"><span>Genere:</span>
                                        <?php foreach($film->genre as $genre) { ?>
                                            <?php echo $genre."," ?>
                                        <?php } ?>
                                     </p>
                                    <p class="card-text"><?php echo "Punteggio: ".$film->score."%" ?></p>
                                    <p class="card-text"><?php echo "Regista: ".$film->director ?></p>
                                    <p class="card-text"><?php echo "Prudottore: ".$film->production ?></p>
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <?php echo "Anno: ".$film->year ?>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>