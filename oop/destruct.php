<?php 

class connection
{
    function __construct()
    {
        echo "Connection Successfully" . "<br>";
    }
    // function __construct()   // Fatal error: Cannot redeclare connection::__construct() 
    // {
    //     echo "hello" . "<br>";
    // }
    function insert()
    {
        echo "Insert all the data here" . "<br>";
    }
    function select()
    {
        echo "Select all the data and perform some operation on it" . "<br>";
    }
    function __destruct()
    {
        echo "Connection close";
    }
}

$result = new connection();
$result->insert();
$result->select();
?>