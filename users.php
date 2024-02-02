<?php

    include("db.php");
    $query = "SELECT * FROM users";
    $result = $con->query($query);

    ?>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['surname']}</td>";
                echo "<td>{$row['username']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['password']}</td>";
                echo "<td>{$row['role']}</td>";
                echo "<td><button class = 'edit' onclick='handleEditButtonClick({$row['id']})'>Edit</button> <button class = 'delete' onclick='handleDeleteButtonClick({$row['id']})'>Delete</button></td>";
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
    <script>
            function handleDeleteButtonClick(itemId) {
                if (confirm("Are you sure you want to delete this item?")) {
                    
                    fetch('delete.php?id=' + itemId, {
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
            
            
                function handleEditButtonClick(userId) {
                    window.location.href = 'edit_user.php?id=' + userId;
                }


            


</script>

    </body>
    </html>