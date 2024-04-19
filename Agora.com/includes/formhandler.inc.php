<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize errors array
    $errors = array();

    // Set form values
    $name = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';
    $phone = $_POST["phone"] ?? '';
    $message = $_POST["message"] ?? '';

    // Proceed with database insertion
    try {
        require_once "db.inc.php";

        $query = "INSERT INTO contactform (name, email, phone, message) VALUES (:name, :email, :phone, :message)";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":message", $message);

        $stmt->execute();

        // Close connections
        $stmt = null;
        $pdo = null;

        // Redirect after successful submission with success query parameter
        header("Location: ../index.php?success=true");
        exit();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    // If the request method is not POST, redirect back to the form
    header("Location: ../index.php");
    exit();
}
