<?php 
// trait sayHello
// {
//     function hello()
//     {
//         echo "Hello Everyone from tarit hello ";
//     }
// }
// trait sayHelloo
// {
//     function hello()
//     {
//         echo "Hello Everyone !! Kem cho?";
//     }
// }
// class A 
// {
    // use sayHello , sayHelloo;
    //Fatal error: Trait method sayHelloo::hello has not been applied as A::hello, because of collision with sayHello::hello
    // use sayHello , sayHelloo 
    // {
        // sayHelloo::hello insteadof sayHelloo;
        //Fatal error: Inconsistent insteadof definition. The method hello is to be used from sayHelloo, but sayHelloo is also on the exclude list
    //     sayHelloo::hello insteadof sayHello;
    //     sayHello::hello as sayhi;

    // }


    // use sayHello ;
    // function hello()
    // {
    //     echo "Hello from class A";
    // }
// }

// class B extends A
// {
//     use sayHello;
//     function hello()
//     {
//         echo "Hello from class B";
//     }
// }

// $obb = new B();
// $obb->hello();

// $obb = new A();
// $obb->hello();
// $obb->sayhi();
?>



<?php 
trait sayHello
{
    protected function hello()   
    // Fatal error: Uncaught Error: Call to protected method ab::hello() from global scope
    {
        echo "Hello Everyone from tarit hello ";
    }
}

class ab 
{
    // use sayHello;
    use sayHello{
        // sayHello::hello as public;
        sayHello::hello as public hi;   // have hi name ni method bani gay che aetale object ma hi apvu padse 
    }
}
$obb = new ab();
// $obb->hello();
$obb->hi();
?>