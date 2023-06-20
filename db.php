<?php

// class Movie
class Movie
{
    public $title;
    public $year;
    public $director;
    public $genres;
    public $duration;
    public $price;
    public $imageURL;
    public $description;

    function __construct($_title, $_year, $_director, $_genres, $_duration, $_price, $_imageURL, $_description)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->genres = $_genres;
        $this->duration = $_duration . " min";
        $this->price = $_price . " €";
        $this->imageURL = $_imageURL;
        $this->description = $_description;
    }

    public function getDiscount()
    {
        return $this->price = $this->price - ($this->price * 0.2) . " €";
    }

    public function getGenre()
    {
        return implode(', ', $this->genres);
    }

    public function renderCard()
    {
        $card = '<div class="col-md-3 my-2">';
        $card .= '<div class="card bg-danger h-100 pointer">';
        $card .= '<div class="image-container">';
        $card .= '<img src="' . $this->imageURL . '" class="card-img-top img-fluid" alt="...">';
        $card .= '</div>';
        $card .= '<div class="card-overlay">';
        $card .= '<div class="card-body">';
        $card .= '<h5 class="card-title">' . $this->title . '</h5>';
        $card .= '<div class="card-text">';
        $card .= '<p>Year: ' . $this->year . '</p>';
        $card .= '<p>Director: ' . $this->director . '</p>';
        $card .= '<p>Genre: ' . $this->getGenre() . '</p>';
        $card .= '<p>Duration: ' . $this->duration . '</p>';
        $card .= '<p>Price: ' . $this->price . '</p>';
        $card .= '<p>Description: ' . substr($this->description, 0, 100) . '...</p>';
        $card .= '</div>';
        $card .= '</div>';
        $card .= '</div>';
        $card .= '</div>';
        $card .= '</div>';

        return $card;
    }
}

// movies 🎥

$movie1 = new Movie('The Lord of the Rings: The Fellowship of the Ring', 2001, 'Peter Jackson', ['Fantasy', 'Adventure'], 178, 10, './img/movie1.jpg', 'The Lord of the Rings: The Fellowship of the Ring is a 2001 epic fantasy adventure film directed by Peter Jackson, based on the first volume of J. R. R. Tolkien\'s The Lord of the Rings.');

$movie2 = new Movie('The Lord of the Rings: The Two Towers', 2002, 'Peter Jackson', ['Fantasy', 'Adventure'], 179, 10, './img/movie2.jpg', 'lorem ipsum');

$movie3 = new Movie('The Fast and the Furious', 2001, 'Rob Cohen', ['Action', 'Fantasy'], 106, 10, './img/movie3.jpg', 'lorem pisum');

$movie4 = new Movie('2 Fast 2 Furious', 2003, 'John Singleton', ['Action', 'Fantasy'], 108, 10, './img/movie4.jpg', 'lorem pisum');

$movie5 = new Movie('The Fast and the Furious: Tokyo Drift', 2006, 'Justin Lin', ['Action', 'Fantasy'], 104, 13, './img/movie5.jpg', 'lorem pisum');

$movie6 = new Movie('Transformers', 2007, 'Michael Bay', ['Action', 'Fantasy'], 144, 6, './img/movie6.jpg', 'lorem pisum');

$movie7 = new Movie('The Conjuring', 2013, 'James Wan', ['Horror', 'Thriller'], 112, 7, './img/movie7.jpg', 'lorem pisum');

$movie8 = new Movie('Frozen', 2013, 'Chris Buck', ['Animation', 'Adventure'], 102, 5, './img/movie8.jpg', 'lorem pisum');


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
