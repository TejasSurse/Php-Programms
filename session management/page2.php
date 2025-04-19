<html>
    <head>
        <title>
            PHP
</title>
</head>

<body>
    <center>
        <?php
        // gettin session data 
        session_start();
        $username = $_SESSION['username'];
        $upass = $_SESSION['userpass'];
        echo "User Name in Next Page ".$username."Pass:".$upass;
        session_unset();
        session_destroy();
        ?>
        <a href="page2.php">page next</a>
        <center>
</body>