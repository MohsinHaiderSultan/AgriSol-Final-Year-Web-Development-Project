<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("SELECT * FROM subscribers WHERE email =?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Email address is already subscribed.<button class='bg-gray-200 border border-green-700 text-green-700 py-2 px-4 rounded-2xl hover:bg-green-600 hover:text-white transition'
            ><a href='HomePage.php'>Go to Back</a></button>";
        }
         else {
            $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
            $stmt->bind_param("s", $email);
            if ($stmt->execute()) {
                echo "Email has been successfully subscribed to our newsletter.<button class='bg-gray-200 border border-green-700 text-green-700 py-2 px-4 rounded-2xl hover:bg-green-600 hover:text-white transition'
                ><a href='HomePage.php'>Go to Back</a></button>";
            } else {
                echo "Error: ". $stmt->error;
            }
        }
        $stmt->close();
    } else {
        echo "Please enter a valid email address.<button class='bg-gray-200 border border-green-700 text-green-700 py-2 px-4 rounded-2xl hover:bg-green-600 hover:text-white transition'
        ><a href='HomePage.php'>Go to Back</a></button>";
    }
    $conn->close();
}
?>