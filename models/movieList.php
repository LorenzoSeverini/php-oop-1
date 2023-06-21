<?php

// movies 🎥

$movie1 = new Movie(
    'The Lord of the Rings: The Fellowship of the Ring',
    2001,
    'Peter Jackson',
    ['Fantasy', 'Adventure'],
    178,
    10,
    '../img/movie1.jpg',
    'The Lord of the Rings: The Fellowship of the Ring is a 2001 epic fantasy adventure film directed by Peter Jackson, based on the first volume of J. R. R. Tolkien\'s The Lord of the Rings.'
);

$movie2 = new Movie(
    'The Lord of the Rings: The Two Towers',
    2002,
    'Peter Jackson',
    ['Fantasy', 'Adventure'],
    179,
    10,
    '../img/movie2.jpg',
    'lorem ipsum'
);

$movie3 = new Movie(
    'The Fast and the Furious',
    2001,
    'Rob Cohen',
    ['Action', 'Fantasy'],
    106,
    10,
    '../img/movie3.jpg',
    'lorem pisum'
);

$movie4 = new Movie(
    '2 Fast 2 Furious',
    2003,
    'John Singleton',
    ['Action', 'Fantasy'],
    108,
    10,
    '../img/movie4.jpg',
    'lorem pisum'
);

$movie5 = new Movie(
    'The Fast and the Furious: Tokyo Drift',
    2006,
    'Justin Lin',
    ['Action', 'Fantasy'],
    104,
    13,
    '../img/movie5.jpg',
    'lorem pisum'
);

$movie6 = new Movie(
    'Transformers',
    2007,
    'Michael Bay',
    ['Action', 'Fantasy'],
    144,
    6,
    '../img/movie6.jpg',
    'lorem pisum'
);

$movie7 = new Movie(
    'The Conjuring',
    2013,
    'James Wan',
    ['Horror', 'Thriller'],
    112,
    7,
    '../img/movie7.jpg',
    'lorem pisum'
);

$movie8 = new Movie(
    'Frozen',
    2013,
    'Chris Buck',
    ['Animation', 'Adventure'],
    102,
    5,
    '../img/movie8.jpg',
    'lorem pisum'
);

// movies array 🎥

$movies = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6, $movie7, $movie8];


// discount 🎬

$movie1->getDiscount();

$movie3->getDiscount();

$movie5->getDiscount();

$movie7->getDiscount();

// genre 🎬

foreach ($movies as $movie) {
    $movie->getGenre();
}
