<?php
function test()
{
    $a = 0;
    echo $a;
    $a++;
}


function staticTest()
{
    static $a = 0;
    echo $a;
    $a++;
}

//each call of test()function will not increment $a 
    // print_r(test());
    // print_r(test());
    // print_r(test());
// in each call $a variable will be increment
    // print_r(staticTest());
    // print_r(staticTest());
    // print_r(staticTest());
    // print_r(staticTest());
    // print_r(staticTest());
    // print_r(staticTest());
    // print_r(staticTest());
//----------------------------------------------
    

?>