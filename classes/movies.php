<?php

class Movies {
    // Variabili d'istanza
    public string $title;
    public int $year;
    public array $genre;
    public string $mainActor;
    public string $production;

    // Variabili di classe
    public static int $counter = 0;

    // Costruttore
    public function __construct(string $title, string $year, array $generi, string $mainActor, string $production) {
        
        $this->title = $title;
        $this->year = $year;
        foreach ($generi as $genere) {
            if (!$genere instanceof Genres) {
                die('I Generi devono essere di tipo Genres');
            }
        };
        $this->genre = $generi;
        self::$counter += 1;

        $this->mainActor = $mainActor;
        $this->production = $production;
    }

    // public function getAllInfo()
    // {
    //     return $this->title . ' ' . $this->year . ' ' . $this->genre . ' ' . $this->mainActor . ' ' . $this->production;
    // }
}