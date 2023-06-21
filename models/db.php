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
        $card = '<div class="col-lg-3 col-md-4 col-sm-6 my-2">';
        $card .= '<div class="card bg-danger h-100 pointer">';
        $card .= '<div class="image-container">';
        $card .= '<img src="' . $this->imageURL . '" class="card-img-top img-fluid" alt="Movie Image">';
        $card .= '</div>';
        $card .= '<div class="card-overlay">';
        $card .= '<div class="card-body">';
        $card .= '<h5 class="card-title text-danger">' . $this->title . '</h5>';
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
