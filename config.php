<!-- config.php -->
 
<?php
$host = 'localhost';
$dbname = 'ProjetArchitechture';
$user = 'root';
$pass = 'test';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // ✅ Message de confirmation :
    echo "✅ Connexion à la base de données réussie !";
    
} catch (PDOException $e) {
    die("❌ Erreur de connexion : " . $e->getMessage());
}

?>
