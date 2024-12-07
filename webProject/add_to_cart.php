<?php
// Start the session
session_start();

// Include the database configuration file
include 'config.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get the product ID from the URL
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Check if the product ID is valid
if ($product_id <= 0) {
    header("Location: product_list.php");
    exit();
}

// Check if the product is already in the cart
$sql = "SELECT * FROM cart WHERE product_id = ? AND user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $product_id, $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Update the quantity of the existing cart item
    $row = $result->fetch_assoc();
    $quantity = $row['quantity'] + 1;
    $update_sql = "UPDATE cart SET quantity = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("ii", $quantity, $row['id']);
    $update_stmt->execute();
} else {
    // Insert a new cart item
    $quantity = 1;
    $insert_sql = "INSERT INTO cart (product_id, user_id, quantity) VALUES (?, ?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("iii", $product_id, $_SESSION['user_id'], $quantity);
    $insert_stmt->execute();
}

// Redirect back to the product list page
header("Location: product_list.php");
exit();
?>