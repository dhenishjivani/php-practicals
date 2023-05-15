<?php
class demo {
    private static function show($na)
    {
        echo "Hello $na!";
    }
    public static function __callStatic($method , $args)   // aa method ma pan static lakhavu padse 
    {
        if(method_exists(__class__ , $method))
        {
            call_user_func_array([__class__ , $method] , $args);
        } else {
            echo "THis is private or non exsist call static method : $method";
            // echo "<pre>";
            // print_r($args);
        }
    }
}

demo::show("Dhenish");
// demo::cal();
?>