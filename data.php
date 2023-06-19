<?php

$arrGenres = [
    1 => "Thriller",
    2 => "Sci-Fi",
    3 => "Action",
    4 => "Horror",
    5 => "Comedy",
];

$movies = [
    new Movies(
        'Alien',
        '1979',
        [
            new Genres($arrGenres[1]),
            new Genres($arrGenres[2]),
            new Genres($arrGenres[4]),
        ],
        'Sigourney Weaver',
        '20th Century Fox'),
    new Movies(
        'Terminator',
        '1984',
        [
            new Genres($arrGenres[1]),
            new Genres($arrGenres[2]),
            new Genres($arrGenres[3]),
        ],
        'Arnold Schwarzenegger',
        'Hemdale Film Corporation, Pacific Western Productions'),
    new Movies(
        'Matrix',
        '1999',
        [
            new Genres($arrGenres[2]),
            new Genres($arrGenres[3]),
        ],
        'Keanu Reeves',
        'Warner Bros.'),
    ];

// var_dump($alien, $terminator, $matrix);
