<?php 
class base {
    // function display() {
    //     echo "I can overrid because i am not final method";
    // }
    // final function show() {
    //     echo "I can not overrid because i am final method";
    // }
}

class derived extends base {
    function display() {    
        echo "Hureeh I am overrided...!!";
    }
    function show() {   // Fatal error: Cannot override final method base::show()
        echo "I can not overrid";
    }
}

// $obb = new base();
// $obb->display();    // I can overrid because i am not final method
$obb = new derived();
$obb->display();    // Hureeh I am overrided...!!
$obb->show();

?>

<?php
final class A {

}

class B extends A {     //Fatal error: Class B cannot extend final class A 

}

?>