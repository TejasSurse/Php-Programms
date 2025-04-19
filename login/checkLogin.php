<html>
    <head>
        <title>
            PHP
</title>
</head>

<body>
    <center>
        <?php
        // global variable ( data is if get - get if post then post but both are reciving same )
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        //echo $user;
        //echo $pass;
        $userid = "tejas";
        $userPass = "tejas";

        if(strcmp($user, $userid)== 0 and strcasecmp($pass, $userPass==0)){
            header("Location:../array.php");
        }else
            echo " YOu are not vaid user".$user.$pass;

        ?>

        <center>
</body>