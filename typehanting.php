<?php 
function foo():?int{     // ? marks means ke kato string kato null
    return null;    
}

// Jo khali function foo():string apyu hoy ne return null karyu hoy to error apse 
// Fatal error: Uncaught TypeError: foo(): Return value must be of type string, null returned 
foo();

echo "Hello";


// Integer return karsu to bhi string ma chali jase I think php ma type declare karvanu nathi avtu to khali number ne string samji letu hase 

// Question no meaning kato int ke string or null game te 
?>