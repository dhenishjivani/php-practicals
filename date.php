<?php

    // echo date('d') . "<br>";    // 1 thi 9 ma  agad 0 avse          Date
    // echo date('j') . "<br>";    // ama 0 nyy ave                    Date
    // echo date('s') . "<br>";    
    // echo date('S') . "<br>";    // st , nd , rd , th
    // echo date('F') . "<br>";    // full name 
    // echo date('M') . "<br>";    
    // echo date('m') . "<br>";     
    // echo date('n') . "<br>";    
    // echo date('y') . "<br>";    
    // echo date('Y') . "<br>";    
    // echo date('D') . "<br>";    
    // echo date('l') . "<br>";    
    // echo date('N') . "<br>";    
    // echo date('w') . "<br>";    
    // echo date('jS') . "<br>";    
    // echo date('N-M-Y') . "<br>";   
    // echo date('z') . "<br>";    // 365 madhi ajano divas kayo che ae kese 
    // echo date('W') . "<br>";    // kayu week che totel week madhi 
    // echo date('t') . "<br>";    // aa month ma ketala divas che ae kese 
    // echo date('L') . "<br>";    //leap year che ke nyy ae kese jo hase to 1 baki 0 apse 

    // echo date('h') . "<br>";         //01 thi 12
    // echo date('H:i:s') . "<br>";    //00 thi 23
    // echo date('g:i:s') . "<br>";    //1 thi 12
    // echo date('G:i:s') . "<br>";    //0 thi 23
    // echo date('s') . "<br>";    // second mate
    // echo date('a') . "<br>";    //am pm mate
    // echo date('A') . "<br>";    //AM PM 
    // echo date('p') . "<br>";    

    // echo mktime('hour , minute , second , month , day , year');    // make time
    // gmmktime('');   // GMT date (Greenwich mean )

    echo date("d-M-Y h:i:s a", mktime(10,30,0,4,14,2023));
    echo date("d-M-Y h:i:s a", gmmktime(10,30,0,4,14,2023));

?>