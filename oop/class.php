<?php 
class calculation{
    public $a , $b;
     function squre(){
        $this->a = $this->b * $this->b;
        return $this->a;
     }
     function sum(){
      $this->a = $this->a + $this->b;
      return $this->a;
     }
}
$obb = new calculation();
$obb->b = 5;
$obb->a = 0;
echo $obb->squre() . "<br>";

// $obb2->b = 5;  // apane aam object bnayva pela variable ma value assign na kari saki 
$obb2  = new calculation();
$obb2->b = $obb->a;  // aavi rite pela object ni return value ne apane aavi rite use kari saki 
$obb2->a = 5;
echo $obb2->sum();
?>