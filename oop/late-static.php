<?php
class Base
{
    protected static $name = " Dhenish ";
    static function show()
    {
        echo self::$name; // je class ma hase aene represent karse 
        echo static::$name; // jeno object aenee represent karse 
    }
}

class derived extends Base 
{
    protected static $name = " Jivani ";
}

$obb = new derived();
$obb->show();
?>