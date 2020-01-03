<?php
$host = 'localhost';
$name = 'root';
$password = '';
$db = 'MIN';

$conn = new mysqli($host, $name, $password, $db);

if(!$conn){
    echo "error in connection";
}

?>