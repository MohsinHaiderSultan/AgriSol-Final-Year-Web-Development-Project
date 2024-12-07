<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are set and not empty
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) &&
        !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        
        // Sanitize input data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method";
}
?>
