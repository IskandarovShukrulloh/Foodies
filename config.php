<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'store';
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) { 
    die('Ошибка подключения к БД: '. $conn->connect_error);
}
?>