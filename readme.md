Ciao ragazzi,
 esercizio di oggi:
 nome repo: php-oop-1

 Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file `index.php` in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Svolgimento:
- All'interno di php creo una classe Movie,
- All'interno della classe Movie dichiaro le variabili d'istanza: $title, $genre, $year, $rate
- Creo una istanza della classe movie
- Assegno dei valori agli attributi dell'istanza videogioco
- All'interno di Movie creo una funzione construct con ($director, $production), passare i parametri nell'istanza di classe
- Creo un metodo con public function.
- Stampo a schermo tramite foreach echo i valori delle propietà

Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
- Aggiungo l'array a genre
- Aggiungo un foreach per ciclare tutti gli elementi dell'array
- Aggiungo echo per printare a schermo gli elementi del foreach

Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
