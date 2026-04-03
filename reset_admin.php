<?php
require_once('includes/db.php');

$username = 'admin';
$password = 'hpci2024';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
    // Check if table exists and has data
    $pdo->exec("CREATE TABLE IF NOT EXISTS admins (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    )");

    // Clear existing admins and insert the new one
    $pdo->exec("TRUNCATE TABLE admins");
    
    $stmt = $pdo->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $hashed_password]);

    echo "SUCCÈS : Le compte administrateur a été mis à jour.\n";
    echo "Identifiants : admin / hpci2024\n";

} catch (PDOException $e) {
    echo "ERREUR : " . $e->getMessage() . "\n";
}
?>
