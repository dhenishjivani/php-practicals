<?php 
abstract class data
{
    public $name = "Dhenish";

    abstract protected function display($n);
    // {
    //     echo $this->name;        abstarct class ma body na hoy error apse 
    // }
}
class subData extends data 
{
    public function display($n)
    {
        // echo "Hello";
        // $this->name = $n;    // jo aya method call karti vadhate je name pass karyu ae assign nyyy kari to default name j avanu Dhenish aem means 16 mi line thi Deep avse and 17me thi default Dhenish
        echo $this->name;
    }
}
$result = new subData();   //  Uncaught Error: Cannot instantiate abstract class data means ke tame abstract class no object na banay sako
$result->display("Deep");

?>