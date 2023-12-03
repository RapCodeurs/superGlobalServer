<?php

$dbhost = $_ENV['DB_HOST'] = 'localhost';
$dbname = $_ENV['DB_NAME'] = 'env';
$dbuser = $_ENV['DB_USER'] = 'admin';
$dbpassword = $_ENV['DB_PASSWORD'] = 'admin';


try {
    $pdo = new PDO("mysql:$dbhost; dbname:$dbname; $bduser; $dbpassword");
    echo "<br>";
    echo " Connexion à la base de données";
}catch (PDOException $e) {
    echo "Erreur de connexion à la base de données ". $e->getMessage();
}


?>
