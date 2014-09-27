<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Movie');
    }

    function it_can_be_rated()
    {
        $this->setRating(5);

        $this->getRating()->shouldBe(5);
    }

    function its_rating_should_not_exceed_five()
    {
        $this->shouldThrow('InvalidArgumentException')->duringSetRating(8);
    }
}
