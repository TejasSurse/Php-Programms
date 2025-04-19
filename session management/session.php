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

        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['userpass'] = $pass;

        echo "Data is stored in session successfully ";        
        ?>
        <a href="page2.php">page next</a>
        <center>
</body>