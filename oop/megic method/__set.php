<?php
class students
{
    private $name;
    function show()
    {
        echo $this->name ;
    }
    function __get($property)
    {
       echo "You are trying to access private or non exists method or property name: $property";

    }
    function __set($property , $value)
    {
        if(property_exists($this , $property)){
            $this->$property = $value;
        } else {
            echo "property not exists: $property";
        }
    }
}

$obb = new students();
// $obb->name;
// print_r($obb->data);
// $obb->show();

$obb->name = "Dhenish";
$obb->show();
?>