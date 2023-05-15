<?php
// try{
//     if($condition){

//     }else{
//         throw new exception("message");
//     }
// }
// catch(exception $jd){
//     echo $jd->getMessage(); // in-build method che message jova mate  error msg ho
// }

// exception inbuilt class che and $jd variable lidho means ke ae apane object banayvo aeno 

// $n = 2;
class myexception extends Exception{
    function errorMessage(){
        $error = $this->getMessage();
        return $error;
    }
}
function dived($n){
    try{
        if($n < 0){
            throw new exception("<br>Enter positive number");
        }else if($n == 0){
            throw new myexception("<br>You can't divid any number with zero(0)");
        }else{
            $result = 10 / $n ;
            echo  "<br>" . $result ;
        }
    }catch(exception $jd){
        echo "<br>";
        echo $jd->getMessage() . "  ";
        echo $jd->getLine() . "<br>";
        echo $jd->getFile();
    }catch(myexception $jd){
        echo $jd->errorMessage();
    }
    finally{
        echo "<br>It's just beginning my friend!";
        echo "\t\tThe game is on!";
    }
}

// dived(5);
// dived(10);
// dived(-2);
// dived(0);

// trigger_error("This message is gereted by trigger_error",E_USER_ERROR);
// trigger_error("This message is gereted by trigger_error",E_USER_WARNING);
// trigger_error("This message is gereted by trigger_error",E_USER_NOTICE);
// trigger_error("This message is gereted by trigger_error",E_USER_DEPRECATED);

// echo "ye <br>";
// echo "kya <br>";
// echo "chal <br>";
// echo "raha <br>";
// die("Me: I don't know");
// exit("Yo exception handling se bhaya");
// echo "hai <br>";
// echo "bhaiiii <br>";
?>
