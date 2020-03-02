<?php
$servername = "mysql:host=localhost;dbname=netland";
$username = "root";
$password = "";

    $pdo = new PDO($servername, $username, $password);
    
    $stmt = $pdo->query('SELECT VERSION()');
    $info = $stmt->fetch();
    echo ($info[0]);
?>