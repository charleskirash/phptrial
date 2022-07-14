<?php
$dsn = 'mysql:host=localhost;dbname=projo';
$user = 'root';
$pass = '';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try{
    $conn = new PDO($dsn, $user, $pass, $opton);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExceptio $e) {
    echo 'Failed To Connect' . $e->getMessage();
}
?>