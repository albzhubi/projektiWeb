<?php
    include("db.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process the form data and insert into the database
        $productName = $_POST['productName'];
        $productDescription = $_POST['productDescription'];
        $productPrice = $_POST['productPrice'];
        $productReview = $_POST['productReview'];
        $productImage = $_FILES['productImage'];
    
        // Check for file upload errors
        if ($productImage['error'] > 0) {
            die('File Upload Error: ' . $productImage['error']);
        }
    
        // Move uploaded file to "uploads" folder with a unique name
        $uploadPath = "uploads/" . uniqid() . '_' . $productImage['name'];
        move_uploaded_file($productImage['tmp_name'], $uploadPath);
    
        $insertQuery = "INSERT INTO products (product_name, description, price, review, image) VALUES ('$productName', '$productDescription', '$productPrice', '$productReview', '$uploadPath')";
    
        if ($con->query($insertQuery) === TRUE) {
            echo "Product added successfully";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $con->error;
        }
    }
    
    $query = "SELECT * FROM products";
    $result = $con->query($query);
    
    ?>  

    <style>
        .toursHeader{
            background-color: black;
        }

        footer{
            height: 100px;
        }

        main .tickets{
            /* background: url(https://img.freepik.com/premium-vector/modern-colorful-3d-wave-wide-banner-background-abstract-background-banner-design-web-banner-texture-header-website-vector-abstract-graphic-design-banner-pattern-background-template_181182-16317.jpg); */
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-position: center;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form-container form{
            display: flex;
            flex-direction: row; 
            flex-wrap: wrap;
            justify-content: space-between; 
            height: auto; 
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
    
        }
        .form-container label {
            width: 100px; 
            margin-bottom: 15px;
        }

        .form-container form input, .form-container form select{
            width: 250px;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            display: block;
        } 

        #logo{
            width: 150px;
            height: 60px;
            left: 0;
            top: 0%;
        }  

        .form-container form select{
            width: 270px;
        }
        #addProductButton{
            cursor: pointer;
            font-size: 15px;
            padding: 10px;
            border-radius: 10px;
            background: rgba(113, 99, 186, 255);
            color: #fff;

        }
        #addProductForm input[type="submit"]{
            cursor: pointer;
        }
        
    </style>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Reviews</th>
            <th>Image</th>
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
            echo "<td>{$row['image']}</td>";
            echo "<td><button class='edit' onclick='handleEditProductButtonClick({$row['id']})'>Edit</button> <button class='delete' onclick='handleDeleteButtonClick({$row['id']})'>Delete</button></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
 
<div class="form-container">
    <button onclick="showAddProductForm()" id="addProductButton">Add Product</button>
        <form id="addProductForm" style="display: none;" method="post" enctype="multipart/form-data">
            <label for="productName">Name:</label>
            <input type="text" id="productName" name="productName">

            <label for="productDescription">Description:</label>
            <input type="text" id="productDescription" name="productDescription">

            <label for="productPrice">Price:</label>
            <input type="text" id="productPrice" name="productPrice">

            <label for="productReview">Review:</label>
            <input type="text" id="productReview" name="productReview">

            <label for="productImage">Image:</label>
            <input type="file" id="productImage" name="productImage">

            <input type="submit" name="submit" value="Add Product">
        </form>

</div>

<script>
        function showAddProductForm() {
            var addProductForm = document.getElementById('addProductForm');
            addProductForm.style.display = 'block';
        }
        function handleDeleteButtonClick(itemId) {
                        if (confirm("Are you sure you want to delete this item?")) {
                            
                            fetch('deleteProducts.php?id=' + itemId, {
                                method: 'DELETE',
                                headers: {
                                    'Content-Type': 'application/json',
                                },
                            })
                            .then(response => {
                                if (response.ok) {
                                    
                                    location.reload();
                                } else {
                                    return response.json();
                                }
                            })
                            .then(error => {
                                alert('Error deleting item: ' + error.error);
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                        }
                    }
                    function handleEditProductButtonClick(productId) {
                    window.location.href = 'edit_product.php?id=' + productId;
            }

            


                    
</script>

<?php   
$con->close();
?>