<?php 
// include 'first.php';
// include 'second.php';

function autoload($class) // Fatal error: __autoload() is no longer supported, use spl_autoload_register() instead
{
    include $class . ".php";
}
spl_autoload_register('autoload');
$obb = new first(); 
$obb2 = new second();

?>