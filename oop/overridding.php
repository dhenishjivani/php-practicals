<?php 
    class base 
    {
        public $name = "Base Class";
        public $x , $y;
        function cal($x , $y)
        {
            return $x * $y;
        }
    }

    class derived extends base
    {
        public $name = "Child class";
        // function cal($x , $y)
        // {
        //     return $x + $y;
        // }
    }

    // $a = new base();
    // echo $a->cal(10 , 10);
    // echo $a->name;      // ato dekhitu j che ne je class no object banavi aeni j property ape ne 
    $b = new derived();     // jo ama method nyy hoy to Parent class madhi valu lese baki override karse parent ne 
    echo $b->cal(10 , 10);
//     echo $b->name;
?>