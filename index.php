<?php

// include_once 'first.php';
// include 'first.php';
// include_once 'first.php';
// include_once 'first.php';

// session_start(); 
// session_unset();


// include 'firsts.php';    // ama warning apine z ni value 11 che ae print kari dese 
// require 'firstg.php';   // ama pachi nu run nyyy thay means z ni value samji layo ne     fatal error apse 
// echo $_COOKIE($cookie_name); // session cookie ma aa dhay rakho bhai [] aama j lakhvanu thay BAKI 
// Fatal error: Uncaught Error: Array callback has to contain indices 0 and 1 aa error avse 
$msg = "How are you" . "<br>";
$msg2 = "What are U doing?";
// $3g = 6; Parse error: syntax error, unexpected integer "3"
$x = 5;
$y = 6;
// $z=$x+$y;  
// echo $z;  
// require 'firstg.php'; 
// include 'firsts.php'; 
// echo $z;  
// echo 'Hello $msg';  --> ama variable nyyy chalatu 
// echo 'Hello escape \"sequence\" characters' . "<br>";  
// echo "Hello Dhenish!" . $msg . "Are you fine!" . 123 ."<br>"; 
// echo "Let's checaaak one mosssre time" ;
// function fun() {
// 	global $msg;
// 	echo $msg;
// }
// fun();
// echo $msgs;
// echo php_ini_loaded_file();
// echo phpinfo();

// $x = 3;
// echo $x . "<br>";
// for($x=0 ; $x <= 9 ; $x++){
//     echo $x . "<br>" ;
// }
// echo "last" . $x;

// print "Hello by PHP print ";  
// print ("Hello by PHP print()");  

// echo $msg . "," . $msg2;
// echo $msg , $msg2;
// print $msg,$msg2;
// echo get_defined_constants();

// $reval = echo $msg;		// aa error aapse unexpectd token 
// $reval = print $msg . $msg2 . "hjgfyt" . "<br>";   // aa ready halo 
// print $reval . "<br>";  //aama print always return value 1 
// print 	$x=5 +  $y=6; 
// function test(){
// 	$sum = $GLOBALS['x'] + $GLOBALS['y'];  -->>  $GLOBALS lakhi aetale pachi $x lakhavani jarur nyy andar 
// 	echo $sum;
// }
// test();
// echo __LINE__;
// echo __FILE__ . "<br>";
// echo __FUNCTION__ . "<br>";
// echo __DIR__ . "<br>";
// echo __METHOD__ . "<br>";
// echo __NAMESPACE__ . "<br>";
// echo "hello";
// 	function test2(){
// 	static $n1 = 5;
// 	$n2 = 7;
// 	$n1 ++ ;
// 	$n2 ++ ;
// 	echo $n1 . "<br>";
// 	echo $n2 . "<br>";
// 	echo __FUNCTION__;
// }
// test2();
// 	test2();
// $z = "Where";
// $$z = 'is_this_work';
// $$$z = "Sahi me? Are you sure?";
// echo $z . "<br>";
// echo $$z . "<br>";
// echo $Where . "<br>";
// echo $is_this_work . "<br>";
// echo $$$z . "<br>";
// echo $$Where;
// print $"is this work";  // avu na kari saki 
// print $is this work;     // avu pan nyyy 
// define("Message","This is error msg to tell you that you make any mistake");
// Warning: define(): Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported
// echo Message . "<br>";
// echo message;
// echo constant("Message"); 
// $nl = NULL;  
// echo $nl; 

// echo $msg .= $msg2;
// echo $x.=$y;
// echo $x=$y . "<**br>";
// $x = "1<br>";
// $str = "sdfsd<br>";
// var_dump($x);
// ECHO gettype($x);
// switch(expression){
// 	case value1:
// 		// code 
// 		break;
// 	case value2:
// 		//code
// 		break;
// 	default :
// 		//code
// }

// Warning: "continue" targeting switch is equivalent to "break" 
// $today = "uojh";
// switch($today){
// 	default;
// 	echo "kya hai bhai?";
// 	break;
// 	case "Monday":
// 		echo "Today is monday";
// 		break;
// 	case "Sunday":
// 		echo "Today is sunday";
// 		break;
// 	case "";
// 		echo "Today is nothing"; 
// 	// default;
// 	// 	echo "kya hai bhai?";
// }

// $size = "Medium";
// $color = "sky-blue";
// switch($size){
// 	case "Small":
// 		switch($color){
// 			case "red":
// 				echo "Your red color small size's t-shirt price is 150 Rs.";
// 				break;
// 			case "pink":
// 				echo "Your pink color small size's t-shirt price is 250 Rs.";
// 				break;
// 			default:
// 				echo "Sorry! we don't have this color in this size";
// 			}
// 	break;

// 	case "Medium":
// 		switch($color){
// 			case "sky-blue":
// 				echo "Your red color medium size's t-shirt price is 200 Rs.";
// 				break;
// 			case "black":
// 				echo "Your pink color small size's t-shirt price is 250 Rs.";
// 				break;
// 			default:
// 				echo "Sorry! we don't have this color in this size";
// 			}
// 	break;

// 	default:
// 		echo "Sorry , Your T-shirt size is not available!";
// }

// $arr = [4,3,6,5,2,1];
// foreach($arr as $keys => $vals){
// 	echo $vals . "<BR>";
// } 
// echo count($arr);

// for($i=1 ; $i<=4 ; $i++){
// 	for($j=1 ; $j<=4 ; $j++){
// 		if(($i == $j)){
// 			continue 2;
// 		}
// 		echo $i . $j;

// 		echo "<br>";
// 	}
// }

// function don(&$test){
// 	$test .= "This is for test";  // aama concate karvu pade ho to j ave baki na male value
// 	// echo $test; // aama jem print thay aEM test na reference thi thay aena jevu pan argument ma &$test lakhvanu ae dhayn rakhavu 
// }
// don($msg);  // aya $msg no reference lidho and don function ne call karyo 
// echo $msg;

// function add(&$i){
// 	$i++;

// }
// echo $x;
// add($x);
// echo $x;
// function sayHello($name="Sonoo"){  
// 	echo "Hello $name<br/>";  
// 	}  
// 	sayHello("Rajesh");  
// 	sayHello();//passing no value  

## call by value hot ke reference hoy badha ma &$var_name aa to joy j baki nyy chale 

// function sum($x , $y){
// 	$ADD = $x + $y;
// 	echo $ADD;
// }
// sum(5,"heyy");

// $hello = array("","","");  
// $hello2 = ["","",""];	// php 5.4 pACHI avyu aa 
// echo count($hello);
// echo $hello;  // Warning: Array to string conversion in
// echo $hello2;
// $asso = ["key1"=>"val1", "key2"=> "val2"];
// foreach($asso as $k => $v){

// 	echo $k .":  ". $v . "<br>";
// }
// print_r(array_change_key_case($asso, CASE_UPPER));
// $dh = [
// 	"key1" => [
// 		"key11" => "val11",
// 		"key12" => "val12"
// 	],
// 	"key2" => [
// 		"key21" => "val21",
// 		"key22" => "val22"
// 	],
// 	"key3" => ""
// ];
// echo "<pre>";
// print_r($dh);
// // print_r(array_keys($dh["key1"])); 

// function array_keys_recursive(array $dh)
// {
// 	foreach ($dh as $key => $value) {
// 		$return[] = $key;
// 		if (is_array($value))
// 			$return = array_merge($return, array_keys_recursive($value));
// 	}
// 	return $return;
// }
// echo "<pre>";
// print_r(array_keys_recursive($dh));

// function cube($n)
// {
//     return ($n * $n * $n);
// }
// $c = array(0,1,2,3,4,5, "abc");
// for($i=0 ; $i<=10; $i++){
// 	$a = ["$i" => "$i" ];
// 	$b = array_map('cube', $a);
// 	echo "<pre>";
// 	print_r($b);
// }
// var_dump($c); // full details ape 
// echo gettype($c);   // only data type apse 

// $ar1 = array(90, "color" => array("favorite" => "red","black"), 5);
// // echo gettype($ar1);
// $ar2 = array(10, "color" => array("favorite" => "green") );
// $result = array_merge_recursive($ar1, $ar2);
// echo "<pre>";
// print_r($result);

// $a = array(2, 4, 6, 8);
// echo "product(a) = " . array_product($a) . "\n";
// echo "product(array()) = " . array_product(array()) . "\n";

// $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
// $rand_keys = array_rand($input, 3);
// echo $input[$rand_keys[0]] . "\n";
// echo $input[$rand_keys[1]] . "\n";
// echo $input[$rand_keys[2]] . "\n";
// $array = array(0 => 'blue','red', 1 => 'rej', 2 => 'green', 3 => 'recd','red');
// print_r($array);
// $key = array_search('red', $array); 
// echo $key;

// $stack = array("orange", "banana", "apple", "raspberry");
// sort($stack);
// print_r($stack);
// $fruit = array_shift($stack);
// print_r($stack);
// print($fruit);

// $input = array("red", "green", "blue", "yellow");  // -4 red thi chalu thay aetale add pan tya thase
// array_splice($input, -4,3, array("black", "maroon"));  // totel 3 remove karo and black maroon add karo 
// echo "<pre>";
// var_dump($input);

// $sre = "my name is JD";
// echo $sre[0];  // ama khali m j avse pan my aakhu jotu hoy to ??
// echo strlen($sre);
// $explodhjf = explode(" " , $sre);  // space thi chhutu padi jase badhu aetale have totel 4 j length thay aa variable ma 
// echo gettype($explodhjf);   // aa array bani jase pachi 
// echo count($explodhjf);
// echo $explodhjf[3];    
// echo ucfirst($sre);
// echo str_repeat("~",100) . "<br>";
// echo $sre;
// echo ucwords($sre);
// echo "<pre>";
// print_r(str_split(strtoupper($sre)));  // str_split majanu che string madhi array banay nakhe che and array ma pachi print_r levu pade 
// // echo substr($sre, 5, -2);
// echo md5($sre);

// $string = "This\r\nis\n\ra\nstring\r";
// echo md5($string);
// echo nl2br($string);

// $arr1 = ["This", "is"];
// $arr2 = ["For" , "implode"];
// print_r(implode($arr1));    // ama hale alag alag element ne bhega kari string banay saki 
// print_r(implode($arr1,$arr2));  // ama 2 array bhega na kari sako  

// $var1 = "Hello";
// $var2 = "hello";
// if (strcasecmp($var1, $var2) == 0) {
//     echo "$var1 is equal to $var2 in a case-insensitive string comparison";
// }
// if (strcmp($var1, $var2) !== 0) {
//     echo "$var1 is not equal to $var2 in a case sensitive string comparison";
// }

// $str = 'abcdef';
// $shuffled = str_shuffle($str);
// // This will echo something like: bfdaec
// echo $shuffled;
// $atr = range(1,10);
// $suff = shuffle($atr);
// foreach($atr as $suff){
// echo $suff;
// }

// $line = "This Is for Regular Expression ";
// $pattern = "*Is*i";
// echo preg_match($pattern,$line);
// echo preg_match_all($pattern,$line);    // ketali var value che ae apse
// echo preg_replace($pattern , "si" , $line);

// $name = "Dhenish";
// $age = 21;
// $arr = compact("name", "age");
// echo "<pre>";
// print_r($arr); // Array ( [name] => Dhenish [age] => 21 ) 
// $arr = [$name, $age];
// echo "<pre>";
// print_r($arr); // Array ( [0] => Dhenish [1] => 21 )
