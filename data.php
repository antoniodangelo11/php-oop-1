<?php

$arrGenres = [
    1 => "thriller",
    2 => "sci-fi",
    3 => "action",
    4 => "horror",
    5 => "Comedy",
];

$movies = [
    new Movies(
        'Alien',
        '1979',
        [
            new Genres($arrGenres[1], $arrGenres[2], $arrGenres[4]),
        ],
        'Sigourney Weaver',
        '20th Century Fox'),
    new Movies(
        'Terminator',
        '1984',
        [
            new Genres($arrGenres[1], $arrGenres[2], $arrGenres[3]),
        ],
        'Arnold Schwarzenegger',
        'Hemdale Film Corporation, Pacific Western Productions'),
    new Movies(
        'Matrix',
        '1999',
        [
            new Genres($arrGenres[2], $arrGenres[3]),
        ],
        'Keanu Reeves',
        'Warner Bros.'),
    ];

// var_dump($alien, $terminator, $matrix);
