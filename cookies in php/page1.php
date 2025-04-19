<html>
    <head>
        <title>
            PHP
</title>
</head>

<body>
    <center>
        <?php
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $ckName = "user";
        ;
        $ckValue = $user;
        setcookie($ckName, $ckValue);
        $ckPass = "password";
        $ckPassval = $pass;
        setcookie($ckPass,$ckPassval);


        // we can provide time also 


        echo $user." ".$pass;
        ?>
        <a href="page2.php">page next</a>
        <center>
</body>