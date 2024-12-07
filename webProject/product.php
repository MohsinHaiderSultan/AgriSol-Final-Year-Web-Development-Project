<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    // Sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $price = htmlspecialchars($_POST['price']);
    $quality = htmlspecialchars($_POST['quality']);
    $description = htmlspecialchars($_POST['description']);

    // Handle file upload
    $targetDir = "uploads/";
    $fileNames = [];
    $allowTypes = array('jpg','png','jpeg','gif');
    
    foreach ($_FILES['images']['name'] as $key => $val) {
        $fileName = basename($_FILES['images']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        
        if(in_array($fileType, $allowTypes)){
            if(move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFilePath)){
                $fileNames[] = $fileName;
            }
        }
    }

    if(!empty($fileNames)){
        $images = implode(",", $fileNames);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO products (name, quantity, price, quality, images, description) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $quantity, $price, $quality, $images, $description);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New product created successfully";
            echo "<button  class='bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4 transition-colors duration-300 ease-in-out mt-6'><a href='product_list.php'>Go to Product List</button></a>";

        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
    } else {
        echo "Please upload valid images.";
    }
    
    $conn->close();
} else {
    echo "Invalid request method";
}
?>