<?php
require 'config.php';

// Encryption Decryption script
function e_d($action, $string)
{
    $k1 = $GLOBALS['SecretKey'];
    $k2 = $GLOBALS['SecretIV'];
    return e_d_Key($action, $string, $k1, $k2);
}

function e_d_Key($action, $string, $secret_key, $secret_iv)
{
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ($action == 'e') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'd') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

// Database Access Functions

// Get Data from Database
function getThis($query, $log = TRUE)
{
    global $conn, $_SESSION; // Use $conn from config.php
    $temp_q = $conn->query($query);
    $result = [];
    $count = 0;
    while ($temp = $temp_q->fetch_assoc()) {
        $rs = [];
        foreach ($temp as $r => $value) {
            $rs[$r] = $value;
        }
        $result[$count] = $rs;
        $count++;
    }
    return $result;
}

// Perform Action on Database
function doThis($query, $log = TRUE)
{
    global $conn, $_SESSION; // Use $conn from config.php
    $conn->query($query);
    $l = substr($query, 0, 1);
    $r = TRUE;
    if ($l == 'I') {
        $r = $conn->insert_id;
    }
    return $r;
}

// Get Customer's Public IP
function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

// Get Config Property Value
function getConfigData($property)
{
    $temp = getThis("SELECT value FROM ConfigData WHERE property='$property'");
    return e_d('d', $temp[0]['value']);
}

// Convert number to Indian format
function IND_Number_format($num)
{
    $len = strlen($num);
    $m = '';
    $num = strrev($num);
    for ($i = 0; $i < $len; $i++) {
        if (($i == 3 || ($i > 3 && ($i - 1) % 2 == 0)) && $i != $len) {
            $m .= ',';
        }
        $m .= $num[$i];
    }
    return strrev($m);
}
?>