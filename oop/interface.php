<?php 
interface a
{
    // public $name ;  // Fatal error: Interfaces may not include member variables 
    // Na paydi ti ne ke Interface ma Properties na hoy to kyathi chale  
    function show($name);
}
interface b 
{
    function display($sarname); 
    // protected function getData();   // Fatal error: Access type for interface method b::getData() must be omitted 
    // No chale bhaila ama Access modifiers public api sako tame km ke default chee ae 
    function getData($a , $b);
}

class c implements a , b 
{
    // Fatal error: Class c contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods
    function show($nam)
    {
        echo $nam . " ";
    }
    function display($gamete)
    {
        echo $gamete . "<br>";
    }
    function getData($x , $y)
    {
        echo $x + $y ;
    }

}
// $obb = new a(); // Fatal error: Uncaught Error: Cannot instantiate interface a Interface no object na bane 
$obb = new c();
$obb->show("Dhenish");
$obb->display("Jivani");
$obb->getData(140,3);
?>