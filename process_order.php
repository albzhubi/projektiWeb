<?php
include 'db.php';
session_start();

if(isset($_POST['buy_now'])) {
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];
    $purchase_date = date('Y-m-d H:i:s');

    $insert_query = "INSERT INTO orders (user, product, purchase_date) VALUES ('$user_id', '$product_id', '$purchase_date')";
    $result = $con->query($insert_query);

    if($result) {
        echo "Order successfully placed!";
        echo  "<script>
        window.location.href = 'purchase_confirmation.php';
        </script>";
    } else {
        echo "Error placing order: " . $con->error;
    }
}
?>
