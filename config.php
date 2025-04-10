<!-- config.php -->
 
<?php
$host = 'localhost';
$dbname = 'ProjetArchitechture';
$user = 'root';
$pass = 'test';

$error_message = 'erreur';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // ✅ Message de confirmation :
    echo "✅ Connexion à la base de données réussie !";
    
} catch (PDOException $e) {
    $error_message = "❌ Erreur de connexion : " . $e->getMessage();
}

// Display the error message if it exists
if (!empty($error_message)) {
    echo "<p style='color: red;'>$error_message</p>";
}
?>
