<?php 
trait repeat
{
    public function color()
    {
        echo "I love Black color";
    }
    public function car()
    {
        echo " Varna" . "<br>";
    }
}

trait again
{
    public function fruit()
    {
        echo " Graps";
    }
}
class a
{
    use repeat;
}

class b
{
    use repeat , again;
}

$obb = new a();
$obb->color();
$obb->car();

$obb = new b();
$obb->color();
$obb->fruit();
?>