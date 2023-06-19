<?php

class Movies {
    // Variabili d'istanza
    public string $title;
    public string $year;
    public array $genre;
    public string $mainActor;
    public string $production;

    // Variabili di classe
    public static int $counter = 0;

    // Costruttore
    public function __construct(string $titolo, string $anno, array $generi, string $attore, string $produzione) {
        
        $this->title = $titolo;
        $this->year = $anno;
        foreach ($generi as $genere) {
            if (!$genere instanceof Genres) {
                die('I Generi devono essere di tipo Genres');
            }
        };
        $this->genre = $generi;
        self::$counter += 1;

        $this->mainActor = $attore;
        $this->production = $produzione;
    }

//     public function getAllInfo()
//     {
//         return $this->title . ' ' . $this->year . ' ' . $this->genre . ' ' . $this->mainActor . ' ' . $this->production;
//     }
}