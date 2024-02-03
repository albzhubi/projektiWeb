<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST['productId'];
    $name = $_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $review = $_POST['productReview'];

    if ($_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
        $productImage = $_FILES['productImage'];

        
        if ($productImage['error'] > 0) {
            die('File Upload Error: ' . $productImage['error']);
        }

        
        $uploadPath = "uploads/" . uniqid() . '_' . $productImage['name'];
        move_uploaded_file($productImage['tmp_name'], $uploadPath);

        
        $updateQuery = "UPDATE products SET product_name='$name', description='$description', price='$price', review='$review', image='$uploadPath' WHERE id=$productId";
    } 
   

    if ($con->query($updateQuery) === TRUE) {
        echo "Product details updated successfully";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'dashboard.php';
                }, 1000); 
              </script>";
    } else {
        echo "Error updating product details: " . $con->error;
    }
    
}

$con->close();
exit();
?>
