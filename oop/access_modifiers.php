<?php 

class products
{
    public $name , $price ;
    public function __construct($n = "Parle G" , $p = 500)
    {
        $this->name = $n ;
        $this->price = $p;
    }
    protected function detailes()
    {
        echo "Without Discount " . $this->name . " price is : " . $this->price . "<br>" ;
    }
}

class grocery_product extends products
{
    public $remove_gst = 150;
    public $discount_price ;
    function detailes()
    {
        $this->discount_price = $this->price - $this->remove_gst;
        echo "With Discount " . $this->name . " price is : " . $this->discount_price . "<br>";
    }
}
$gpro = new grocery_product("T-shirt") ;
// $pro = new products("T-shirt");
$gpro->detailes();
// $pro->detailes();

?>