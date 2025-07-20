<?php
$servername = "localhost";
$username = "root";
$db_name = "request_db";
$password = "";

try{
    $pdo = new PDO("mysql:host=$servername;dbname=$db_name;", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Unable To Connect" . $e->getMessage();
}
?>