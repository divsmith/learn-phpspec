<?php 

class Movie {

    protected $rating;
    protected $watched = false;

    public function watch()
    {
        $this->watched = true;
    }

    public function isWatched()
    {
        return $this->watched;
    }

    public function setRating($rating)
    {
        $this->validateRatingRange($rating);

        $this->rating = $rating;
    }

    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param $rating
     */
    public function validateRatingRange($rating)
    {
        if ($rating > 5) throw new InvalidArgumentException();
    }
}
