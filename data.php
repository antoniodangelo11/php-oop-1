<?php

$movies = [
    new Movies(
        'Alien',
        '1979',
        [
            new Genres("thriller"),
        ],
        'Sigourney Weaver',
        '20th Century Fox'),
    new Movies(
        'Terminator',
        '1984',
        [
            new Genres("thriller"),
        ],
        'Arnold Schwarzenegger',
        'Hemdale Film Corporation, Pacific Western Productions'),
    new Movies(
        'Matrix',
        '1999',
        [
            new Genres("thriller"),
        ],
        'Keanu Reeves',
        'Warner Bros.'),
    ];

// var_dump($alien, $terminator, $matrix);
