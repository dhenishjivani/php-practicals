<?php 
class students
{
    public $course = "PHP";
    private $na;
    public function display($na)
    {
        $this->na = $na ;
    }
    public function __sleep()
    {
        return array('na');
    }
    public function __wakeup()
    {
        echo "<br><br>This is wakeup method <br><br>";
    }
}

$obb = new students();
$obb->display("Dhenish");
$srl = serialize($obb);
echo "<pre>";
var_dump($srl);

$us = unserialize($srl);
// echo "<pre>";
var_dump($us);
?>