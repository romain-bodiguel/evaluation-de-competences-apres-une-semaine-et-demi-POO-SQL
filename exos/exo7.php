<?php
require_once '../inc/functions.php';

/*
 * Exo 7 : Mario DB!
 * 
 * (No class to write here)
 * 
 * 
 *  1. Create a new database named 'supermario' in your localhost 
 *     Import the SQL file sql/exo7-import.sql
 * 
 *  2. Establish a connection to this database from PHP, 
 *     using the default user 'explorateur'.
 *     Store this connection in the $pdo variable
 * 
 *  3. Find and store all heroes data in the $heroes variable
 * 
 *  4. Find and store all information of the hero named 'Yoshi' in the
 *     $yoshi variable using an associative array
 * 
 *  5. Insert a new hero using these data :
 *    - name : Princess Peach
 *    - color : pink
 *    - use default values for the others data
 * 
 */

// ------------------------
// START OF YOUR CODE
// ------------------------

// 2. Store DB connection in $pdo
$dsn = 'mysql:dbname=supermario;host=localhost;charset=UTF8';
$user = 'supermario';
$password = 'supermario'; // je sais c'est pas bien comme mot de passe, mais c'est pour l'exo !!!

// je vérifie que ma connexion est effectuée
try {
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
} 
// sinon j'affiche un message
catch(PDOException $exception) {
    echo 'Connexion échouée : ' . $exception->getMessage();
    exit();
}

// 3. Store all heroes in $heroes
$sqlHeroes = 'SELECT * FROM heroes';
$heroes = $pdo->query($sqlHeroes)->fetchAll(PDO::FETCH_ASSOC);

// 4. Store one hero (Yoshi) in $yoshi
$sqlYoshi = 'SELECT * FROM heroes WHERE name LIKE \'%YOSHI%\'';
$yoshi = $pdo->query($sqlYoshi)->fetch(PDO::FETCH_ASSOC);

// 5. Insert a new hero (Princess Peach) in database
$sqlPeach = 'INSERT INTO heroes (name, color) VALUES (\'Princess Peach\', \'pink\')';
$peach = $pdo->exec($sqlPeach);

// ------------------------
// END OF YOUR CODE
// ------------------------

/*
 * Tests
 * Pas touche !
 */
check(7);
