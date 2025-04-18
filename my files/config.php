<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database Configurations
$host = "localhost:3306"; // Updated host with port
$user = "root";          // Database username
$pass = "root";          // Database password
$db = "TiXUP";           // Database name

// Establish database connection
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
}
// Date Time Configurations
$date = date_create();
date_default_timezone_set("Asia/Calcutta");
date_timestamp_get($date);

// Communications
//$SMS_Permissions=FALSE;
//$Email_Permissions=FALSE;

// Email Client Info
//$Mail_Host = 'smtp.yandex.com';
//$Mail_User = 'radio@patiala.city';
//$Mail_Pass = 'Radio@1922';
//$Mail_Method = 'ssl';
//$Mail_Port = 465;
//$Mail_Sender ="no_reply@patiala.city";
//$Mail_SenderName = "Patiala.City";

// Deployment Specific Configurations
$GLOBALS['SecretKey'] = "Pa3gD0dl";
$GLOBALS['SecretIV'] = "m8we03Tq";
?> 