<?php
    #DATABASE CONNECTION
    // Dsn - Data source name
    $dsn = "mysql:host=localhost;dbname=agora-institute";
    $dbusername = "Agora-Institution";
    $dbpassword = "Server2021!";

    // try in block code: we are running block of codes, if error occurs then i can do something else by 
    //catching the error and doing something else
    // pdo - Php data objects (They are ways of connecting to a data base)
    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Check if connected successfully
        // echo "Connected successfully to database!";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    