<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = null;

try {
    $db = new PDO("mysql:host=$servername;dbname=db_sqt", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>