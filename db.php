<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "practice";

$conn = new mysqli($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Unable to connect".$new_conn->connect_error);
}
?>