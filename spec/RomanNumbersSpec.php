<?php

namespace spec;

use RomanNumbers;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumbersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumbers::class);
    }

    function it_returns_I_if_1()
    {
        //El this sera la nostra classe(roman numbers).
        $this->convert(1)->shouldReturn('I');
    }

    function it_returns_II_if_2()
    {
        //El this sera la nostra classe(roman numbers).
        $this->convert(2)->shouldReturn('II');
    }

    function it_returns_III_if_3()
    {
        //El this sera la nostra classe(roman numbers).
        $this->convert(3)->shouldReturn('III');
    }

    function it_returns_V_if_5()
    {
        //El this sera la nostra classe(roman numbers).
        $this->convert(5)->shouldReturn('V');
    }
    function it_returns_X_if_10()
    {
        //El this sera la nostra classe(roman numbers).
        $this->convert(10)->shouldReturn('X');
    }
}
