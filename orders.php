<?php
include("db.php");

$query = "SELECT orders.id, users.name AS user_name, orders.product, orders.purchase_date
          FROM orders
          JOIN users ON orders.user = users.id";

$result = $con->query($query);
?>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Product</th>
                <th>Purchase Date</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['user_name']}</td>";
                echo "<td>{$row['product']}</td>";
                echo "<td>{$row['purchase_date']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    $con->close();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
        <style>
            .edit{
                cursor: pointer;
                color: green; 
            }
            .delete{
                cursor: pointer;
                color: red;  
            }
    </style>
    <body>

    </body>
    </html>