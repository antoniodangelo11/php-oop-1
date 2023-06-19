<?php

class Genres
{
    public $genre1;
    public $genre2;
    public $genre3;
    public $genre4;
    public $genre5;

    public function __construct(string $genre1, string $genre2 = null, string $genre3 = null, string $genre4 = null, string $genre5 = null)
    {
        $this->genre1 = $genre1;
        $this->genre2 = $genre2;
        $this->genre3 = $genre3;
        $this->genre4 = $genre4;
        $this->genre4 = $genre5;
    }
}
