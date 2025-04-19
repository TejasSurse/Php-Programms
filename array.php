// collection of homogenious ds collection of multiple types of datatypes 
// 

<?php
    /*
    two types simple, associative 

    */
    $arr = array("indore", "pune", "delhi" );
    //print_r($arr);
    for($i = 0; $i<count($arr); $i++){
       // echo $arr[$i]."\n";
    }

    /* associative - array with our index descision  */
    $arr1 = ["a" => "indore", "b" => "pune", "c" => "Delhi"];
    $arr2 = ["indore", "pune", "delhi", "hydrabad"];
   // print_r($arr1);
   // print_r($arr2);

    // in php there is reverse indexing like last is -1 
    $newArray = array_slice($arr, -2, 3, true);
    // print_r($newArray);


    // inbuilt funciton related to array  
    $a = array("mon", "tue", "web", "sat");
    $b = array("mon", "web", "Thus", "feb", "tue");
    $c = array("mon", "Web", "fri", "jan", "sat");
    // compare array 
    $d = array_intersect($a, $b);
    // prints same values in both the array 
    print_r($d);
    // diff = diff values which are in 1 but not in 2 
    // array_unique ( uniqye value in singe array ); ( removes repeated values );

    // array_map
    $f = array(4,2,3,24,34,44);
    // multiply every element of array by 2

    // map - applied on every element of the array with perfomring any operation 

    // funtion whihc multiplies every elemnt by 2
    function multi($n){
        return $n*2;
    }

    function evenOdd($n){
        if($n%2 == 0){
            return "even = ".$n;
        }else{
            return "odd = ".$n;
        }
    }

    $newArray = array_map(
        'evenOdd', $f);
    //print_r($newArray);
        // range - return range from (start, end , steps )
    //print_r(range('a','z', 2));


?> 
