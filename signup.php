<?php 
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $name = trim($_POST["Name"]);
    $password = trim($_POST["Password"]);
    $pass_repeat = trim($_POST["password_repeat"]);

    if (empty($name) && empty($password) && empty($pass_repeat)) {
        die("All Fields Are Required");
    } else {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        }

    $stmt = $pdo->prepare("INSERT INTO practice_table (name, password_hash) VALUES (?, ?)");
    try {
        $stmt -> execute([$name, $password_hash]);
        echo "<script>Alert('Sign Up Successful')</script>";
    } catch (PDOException $e) {
        if ($e->getCode() == 404) {
            echo "<script>alert('Error in Signing Up')</script>";
        } else {
            die("Database Error: " .$e->getMessage());
        }
    }
       }
?> 
