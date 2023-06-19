<?php

class Movies {
    // Variabili d'istanza
    public string $title;
    public int $year;
    public array $genre;
    public string $mainActor;
    public string $production;

    // Costruttore
    public function __construct(string $title, string $year, array $genre, string $mainActor, string $production) {
        
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->mainActor = $mainActor;
        $this->production = $production;
    }

    // Metodo per raggrupare tutte le info
    public function getAllInfo()
    {
        return $this->title . '<br>' . $this->year . '<br>' . $this->genre . '<br>' . $this->mainActor . '<br>' . $this->production;
    }
}