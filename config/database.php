<?php

    $hostname = "localhost";
    $username = "phpdemo";
    $password = "4Mu99BhzK8dr4vF1";

    try {
        $connection = new PDO("mysql:host=$hostname;dbname=php_crud", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

?>