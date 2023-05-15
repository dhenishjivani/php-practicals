<?php 
// function sum(int $val) // Fatal error: Uncaught TypeError: sum(): Argument #1 ($val) must be of type int, string given      -->> jo int apyu hoy aya ne apane string pass kari to 
// {
//     echo $val + 10 ;
// }
// sum(10);
// sum("Dhenish");     // Fatal error: Uncaught TypeError: Unsupported operand types: string + int 

// function fruits(array $names)
// {
//     foreach($names as $name)    // Warning: foreach() argument must be of type array|object, int given
//     {
//         echo $name . "<br>";
//     }
// }

// $data = 30;  // foreach array ke object mate che aema int nyy chale ne 
// $data = "Dhenish";  // Warning: foreach() argument must be of type array|object, string given
// $data = ['Dhenish']; // aa chalse 
// $data = ['Mengo' , 'Banana' , 'Orange' , 'Apple'];
// fruits($data);

// class Hyy
// {
//     function sayHyy() {
//         echo "Hyy Everyone!";
//     }
// }
// class Bye
// {
//     function sayBye() {
//         echo "See You again!";
//     }
// }

// function gretings(Hyy $val)
// {
//     $val->sayHyy();
// }

// // $obb = new Bye();
// $obb = new Hyy();

// gretings($obb);


class college {
    function getNames(Department $names) // aya specifie kari devanu ke kya class ni method call karvana chiye 
    {
        foreach($names->Names() as $val)
        {
            echo $val . "<br>";
        }
    }
}

class Department {
    function Names()
    {
        $dName = ['CE' , 'EC' , 'IT'];
        return $dName;
    }
}

// class xyz 
// {

// }

// $a = new xyz();
$dep = new Department();
$clg = new college();
$clg->getNames($dep);
// $clg->getNames($a); // aa program ma andar jatu rese tya pachi error apse pan apane tyar pela j joy che error to 
?>