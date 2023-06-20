<?php

// class 🎦
class Movie
{
    public $title;
    public $year;
    public $director;
    public $genre;
    public $duration;
    public $price;

    function __construct($_title, $_year, $_director, $_genre, $_duration, $_price)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->duration = $_duration . " min";
        $this->price = $_price . " €";
    }

    public function getDiscount()
    {
        return $this->price = $this->price - ($this->price * 0.2) . " €";
    }
}

// movies 🎥

$movie1 = new Movie('The Lord of the Rings: The Fellowship of the Ring', 2001, 'Peter Jackson', 'Fantasy', 178, 10);

$movie2 = new Movie('The Lord of the Rings: The Two Towers', 2002, 'Peter Jackson', 'Fantasy', 179, 10);

$movie3 = new Movie('The Fast and the Furious', 2001, 'Rob Cohen', 'Action', 106, 10);

$movie4 = new Movie('2 Fast 2 Furious', 2003, 'John Singleton', 'Action', 108, 10);

// discount 🎬

$movie1->getDiscount();

$movie3->getDiscount();

// print movies 🍿

// movie 1
echo "<h2>Movie 1</h2>";

echo "<h3>Title: " . $movie1->title . "</h3>";
echo "<h3>Year: " . $movie1->year . "</h3>";
echo "<h3>Director: " . $movie1->director . "</h3>";
echo "<h3>Genreh3>: " . $movie1->genre . "</h3>";
echo "<h3>Duration: " . $movie1->duration . "</h3>";
echo "<h3>Price: " . $movie1->price . "</h3>";

echo "<br>";

// movie 2
echo "<h2>Movie 2</h2>";

echo "<h3>Title: " . $movie2->title . "</h3>";
echo "<h3>Year: " . $movie2->year . "</h3>";
echo "<h3>Director: " . $movie2->director . "</h3>";
echo "<h3>Genre: " . $movie2->genre . "</h3>";
echo "<h3>Duration: " . $movie2->duration . "</h3>";
echo "<h3>Price: " . $movie2->price . "</h3>";

echo "<br>";

// movie 3
echo "<h2>Movie 3</h2>";

echo "<h3>Title: " . $movie3->title . "</h3>";
echo "<h3>Year: " . $movie3->year . "</h3>";
echo "<h3>Director: " . $movie3->director . "</h3>";
echo "<h3>Genre: " . $movie3->genre . "</h3>";
echo "<h3>Duration: " . $movie3->duration . "</h3>";
echo "<h3>Price: " . $movie3->price . "</h3>";

echo "<br>";

// movie 4
echo "<h2>Movie 4</h2>";

echo "<h3>Title: " . $movie4->title . "</h3>";
echo "<h3>Year: " . $movie4->year . "</h3>";
echo "<h3>Director: " . $movie4->director . "</h3>";
echo "<h3>Genre: " . $movie4->genre . "</h3>";
echo "<h3>Duration: " . $movie4->duration . "</h3>";
echo "<h3>Price: " . $movie4->price . "</h3>";

?>

//