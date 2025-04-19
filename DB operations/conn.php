<?php
    // steps to work with db
    // 1 connection establish 
    // 2 query execution 
    // 3 close connection 


    $mycon = mysqli_connect("localhost", "root", "root", "college");

    echo "Connection Successfull";

    $sql = "select * from book1";
    
?>