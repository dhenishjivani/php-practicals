<?php 

// class dj 
// {
//     public static $name = "Dhenish";
//     public function __construct($n)
//     {
//         self::$name = $n;
//     }
//     public static function show()
//     {
//         // echo self::$name;
//         // echo $this->name;
//         // Notice: Accessing static property dj::$name as non static
//         // Warning: Undefined property: dj::$name in
//         // kidhu ne ke $this che ae static mate na chale aema self::xyz no use thay 
//     }
// }
// dj::show();    // method call  with class name 
// $obb = new dj("Hello and Namashkar Dosto");    // obj banavine method call 
// $obb->show();


class parents
{
    public static $name = "How are you ??";

}

class child extends parents  // Fatal error: Cannot use 'parent' as class name as it is reserved
{
    public static function show()
    {
        echo parents::$name;    // parent class na variable ne access karva mate parent::name of the variable 
    }
}

// $ob = new child();
// $ob::show();
child::show();  // ama pan thay sake object na banavo hoy to pan class name use karvanu self  ke parent nayyyy 
?>