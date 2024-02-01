<?php
    include("db.php");


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process the form data and insert into the database
        $productName = $_POST['productName'];
        $productDescription = $_POST['productDescription'];
        $productPrice = $_POST['productPrice'];
        $productReview = $_POST['productReview'];
    
        $insertQuery = "INSERT INTO products (product_name, description, price, review) VALUES ('$productName', '$productDescription', '$productPrice', '$productReview')";
    
        if ($con->query($insertQuery) === TRUE) {
            echo "Product added successfully";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $con->error;
        }
        header("Location: " . $_SERVER['PHP_SELF']);
    }
    $query = "SELECT * FROM products";
    $result = $con->query($query);
    ?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Reviews</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['product_name']}</td>";
            echo "<td>{$row['description']}</td>";
            echo "<td>{$row['price']}</td>";
            echo "<td>{$row['review']}</td>";
            echo "<td><button class = 'edit' onclick='handleButtonClick({$row['id']})'>Edit</button> <button class = 'delete' onclick='handleButtonClick({$row['id']})'>Delete</button></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<div class="form-container">
    <button onclick="showAddProductForm()">Add Product</button>
    <form id="addProductForm" style="display: none;" method="post">
        <label for="productName">Name:</label>
        <input type="text" id="productName" name="productName">

        <label for="productDescription">Description:</label>
        <input type="text" id="productDescription" name="productDescription">

        <label for="productPrice">Price:</label>
        <input type="text" id="productPrice" name="productPrice">

        <label for="productReview">Review:</label>
        <input type="text" id="productReview" name="productReview">

        <input type="submit" name="submit"value="Add Product">
    </form>
</div>

<script>
function showAddProductForm() {
    var addProductForm = document.getElementById('addProductForm');
    addProductForm.style.display = 'block';
}
</script>

<?php
$con->close();
?>