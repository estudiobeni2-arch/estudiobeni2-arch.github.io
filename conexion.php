<?php
$servername = "localhost";
$username = "root"; // Default username, adjust if different
$password = ""; // Default password, adjust if different
$dbname = "exitsmart";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>
 
