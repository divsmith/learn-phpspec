<?php 

class Movie {

    protected $rating;

    public function watch()
    {

    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getRating()
    {
        return $this->rating;
    }
}
