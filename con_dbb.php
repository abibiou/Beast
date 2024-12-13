<?php
$host = 'localhost'; 
$dbname = 'beast'; 
$username = '';
$password = ''; 

$con = mysqli_connect($host, $username, $password, $dbname);


if (!$con) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) {

    echo "Erreur de connexion : " . $e->getMessage();
}
?>
