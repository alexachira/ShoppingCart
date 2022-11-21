<?php
$host = 'localhost';
$dbname = 'shopping';
$user = 'root';
$password = '';
try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname",$user, $password);
    $DBH->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Sorry couldn't connect to the dababase";
    file_put_contents("pdoerrors.txt",$e->getMessage());
}

?>