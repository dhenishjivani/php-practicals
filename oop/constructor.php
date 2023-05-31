<?php
class car
{
    // public $color = "black", $name;
    public $color, $name;

    function __construct($co = "Black", $na = "Fortuner")
    {
        $this->color = $co;
        $this->name = $na;
    }

    function detailes()
    {
        echo "I bought " . $this->color . " Color " . $this->name;
    }
}

$a = new car();
$a = new car("White");
$a = new car("White" , "Sx4");

// $a->color = "Black";
// $a->name = "Verna";
$a->detailes();
