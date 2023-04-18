<?php
// Informations de connexion à la base de données
$servername ='localhost';
$host = 'localhost';
$dbname = 'example_db';
$username = 'root';
$password = '';

// Connexion à la base de données MySQL en utilisant PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=example_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>
