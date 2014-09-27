<?php 

class Movie {

    protected $rating;

    public function watch()
    {

    }

    public function setRating($rating)
    {
        if ($rating > 5) throw new InvalidArgumentException();
        $this->rating = $rating;
    }

    public function getRating()
    {
        return $this->rating;
    }
}
