<?php
    // database connection PDO

    $dsn = 'mysql:host=localhost;dbname=halaltour_kr';
    $username = 'root';

    try {
        $db = new PDO($dsn, $username);

    } catch (PDOexeption $e){
        $error = "Database error: ";
        $error.= $e->getmessage();
        include("view/error.php");
        exit();
    }