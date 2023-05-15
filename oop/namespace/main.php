<?php 
require 'second.php';
require 'first.php';

// function show()
// {
//     echo "I don't want to say anything..!";
// }
// Fatal error: Cannot declare class demo, because the name is already in use

// solution is used namespace to difrenciated of both class
// $obb = new pelu\demo;
// show();     // aa file nu show() nu result apse 
// echo "<br>";
// $obb->show();  // ama aevu hatu ke class ni andar method hati aetle object banavo padyo
// $obb = new biju\demo;

// function display()
// {
//     echo "This is from here";
// }

// display();
// biju\display();     // ama dairect means global rite kay saki m method che aetale obj banavani jarur nahii 


$obb = new biju\demo();

// aama karine long name ne sort name banay saki 
// use dhenish\pr1\test\demo as sort;
// $obj = new sort\demo(); 
?>