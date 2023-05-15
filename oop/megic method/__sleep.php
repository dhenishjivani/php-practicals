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
}

$obb = new students();
$obb->display("Dhenish");
$srl = serialize($obb);
echo "<pre>";
echo $srl;
?>