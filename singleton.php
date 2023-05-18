<?php
class Singleton {
    private static $instance = NULL;
    private function __construct() {
        echo "Database connection process is successfully" . "<br>";
    }
    public static function show() {
        if(self::$instance == NULL) {
            self::$instance = new mysqli('localhost' , 'root' , 'Simform@123' , 'test');
            // print_r(self::$instance);
        } else {
            echo "Database is already connected" . "<br>";
        }
        return self::$instance;
    }
}
// $obj = new Singleton();
// $obj = Singleton::getDb();
// $obj = Singleton::show();
$obj = Singleton::show();
$obj2 = Singleton::show();
$obj = Singleton::show();
// print_r($obj);

$sql = "select *  from first";
$result = $obj->query($sql);
$response = $result->fetch_all();
echo "<pre>";
print_r($response);

?>