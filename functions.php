<?php
    // when function inside the class they are methods 
    // function outside class - function 
    // function display(){
    //     echo " THis is function code \n";
    // }
    // // main code 

    // display();
    // verag var args
    // just use return keyword for return 

    // function return value - return by value 
    function sum(...$a){
        // parameterized function
        $sum = 0;
        foreach($a as $m){
            $sum+=$m;
        }
        echo $sum."<br>";
    }

    // copy by value
    // value doen nont change in function ~ call by value 
    // copy by reference 
    // call by reference how

    // just use &(variable);


    sum(4,2);
    sum(43,23,3);
   
    echo "End Program";
?>