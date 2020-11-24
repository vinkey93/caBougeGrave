<?php 
/*
$connect = new mysqli("localhost","root","","my_store");

if($connect){

}else {
    echo "Connection Failed";
    exit();
}*/

define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_HOST', '127.0.0.1');
define('MYSQL_DATABASE', 'my_store');

$pdoOptions = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false);

$conn = new PDO("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD, $pdoOptions);