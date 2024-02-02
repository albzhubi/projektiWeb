<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $productId = $_GET['id'];
    $query = "SELECT * FROM products WHERE id = $productId";
    $result = $con->query($query);

    if ($result && $row = $result->fetch_assoc()) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Product</title>
        </head> 
        <body>
            <h2>Edit Product</h2>
            <form method="post" action="update_product.php">
            <input type="hidden" name="productId" value="<?php echo $row['id']; ?>">


            <label for="productName">Name:</label>
            <input type="text" id="productName" name="productName">

            <label for="description">Description:</label>
            <textarea id="description" name="description" required><?php echo $row['description']; ?></textarea>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="<?php echo $row['price']; ?>" required>

            <label for="productReview">Review:</label>
            <input type="text" id="productReview" name="productReview">

            <input type="submit" value="Save Changes">
        </form>

        </body>
        </html>
        <?php
    } else {
        echo "Product not found.";
    }

    $con->close();
    exit();
}
?>
