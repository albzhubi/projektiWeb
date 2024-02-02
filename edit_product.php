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
            <style>
                    .form-container {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        height: 400px;
                        width: 300px;
                        margin: auto;
                        padding: 20px;
                        border: 1px solid black;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        position: relative;
                    }

                    .form-container label {
                        margin-bottom: 15px;
                        font-family: 'Poppins', sans-serif;
                    }

                    .form-container input,
                    .form-container textarea,
                    .form-container select {
                        width: 250px;
                        margin-bottom: 15px;
                        margin-left: 20px;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        display: block;
                        font-family: 'Poppins', sans-serif;
                    }

                    .form-container input[type="submit"] {
                        width: 150px;
                        height: 40px;
                        border: none;
                        border-radius: 20px;
                        font-size: 14px;
                        cursor: pointer;
                        background-color: #145b97;
                        color: white;
                        position: absolute;                        
                        left: 45%; 
                        transform: translateX(-50%); 
                    }

                    .form-container input[type="submit"]:hover {
                        background-color: #0e4569;
                    }

                    #logo {
                        width: 150px;
                        height: 60px;
                        left: 0;
                        top: 0%;
                    }

                    .payment-icon {
                        margin-left: 100px;
                        margin-right: 20px;
                    }

                    .dropdown {
                        position: relative;
                        display: inline-block;
                        cursor: pointer;
                    }

                    .dropdown-content {
                        color: #000;
                        display: none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 160px;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        padding: 12px 16px;
                        z-index: 1;
                        border-radius: 15px;
                    }

                    .dropdown:hover .dropdown-content {
                        display: block;
                    }
</style>


        </head> 
        <body>
        <div class="editForm">
            <div class="form-container">
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
            </div>
        </div>
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
