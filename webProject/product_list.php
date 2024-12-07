<?php
// Start the session
session_start();

// Include the database configuration file
include 'config.php';

// Fetch products from the database
$sql = "SELECT id, name, quantity, price, quality, images, description FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
     .product-card {
        margin-left: 20px;
        margin-right: 20px;
            width: 300px;
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            padding-bottom: 5px;
        }

     .product-card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

     .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

     .product-info {
            padding: 16px;
        }

     .product-name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

     .product-price {
            font-size: 18px;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 8px;
        }

     .product-quality {
            font-size: 16px;
            color: #666;
            margin-bottom: 8px;
        }

     .product-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 16px;
        }

     .product-rating {
            font-size: 14px;
            color: #333;
            margin-bottom: 16px;
        }

     .btn  {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
            padding-bottom: 5px;;
        }

     .btn :hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold text-center mb-10">Product List</h1>
        <?php if ($result && $result->num_rows > 0):?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php while($row = $result->fetch_assoc()):?>
                    <div class="product-card">
                        <?php
                        $images = explode(",", $row['images']);
                        if (!empty($images[0])):?>
                            <img src="uploads/<?php echo htmlspecialchars($images[0]);?>" alt="<?php echo htmlspecialchars($row['name']);?>" class="product-image">
                        <?php endif;?>
                        <div class="product-info">
                            <h2 class="product-name"><?php echo htmlspecialchars($row['name']);?></h2>
                            <p class="product-price">$<?php echo htmlspecialchars($row['price']);?></p>
                            <p class="product-quality">Quality: <?php echo htmlspecialchars($row['quality']);?></p>
                            <p class="product-description">Description: <?php echo htmlspecialchars($row['description']);?></p>
                            <form action="add_to_cart.php" method="post">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']);?>">
                                <button type="submit" class="btn">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        <?php else:?>
            <p class="text-gray-700 text-center">No products found.</p>
        <?php endif;?>
    </div>
</body>
</html>

<?php
// Close the database connection
if (isset($conn)) {
    $conn->close();
}
?>