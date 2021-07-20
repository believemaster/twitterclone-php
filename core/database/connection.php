<?php 

$dsn = 'mysql: host = localhost; dbname=twitterClone';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
}catch(PDOException $e) {
    echo "<b style='color:red'>Connection Error!</b> <hr>";
    echo    "<ul style='color:blue'>
            <li>".$e->getMessage()."</li>
            </ul>";
}