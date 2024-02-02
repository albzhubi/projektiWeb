<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST['productId'];
    $name = $_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $review = $_POST['productReview'];

    $updateQuery = "UPDATE products SET product_name='$name', description='$description', price='$price', review='$review' WHERE id=$productId";

    if ($con->query($updateQuery) === TRUE) {
        echo "Product details updated successfully";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'dashboard.php';
                }, 2000); 
              </script>";
    } else {
        echo "Error updating product details: " . $con->error;
    }
    
}

$con->close();
exit();
?>
