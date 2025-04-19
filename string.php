// string in php with string function 
<?php
    $myStr = "Hello Tejas Surse Tejas ";
    $n = strlen($myStr);
    echo "length is : ".$n."\n";
    $w = str_word_count($myStr);
    echo "NO. of Words :".$w."\n";

    // chunk - we want to creat new stirng and with added new charactesrs
    // we want to add new character # after two characters 
    $chunk = chunk_split($myStr,5,'#');
    echo "Chunked string is : ".$chunk."\n";

    // split function it creates new array and return it like we want to cut string after some characters 
    $split = str_split($myStr, 5);
    print_r($split);

    echo strtoupper($myStr)."\n";
    echo strtolower($myStr)."\n";
    

    // count perticular count 
    echo substr_count($myStr,"Tejas")."\n";

    // first character cap
    echo ucwords($myStr);

    // lc first lower thing 

    // strcmp // compare two string return 0 of string are same // user id password compare 
    // strcasecmp // not case sensitive 
?>