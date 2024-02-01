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
                echo "<td><button class = 'edit' onclick='handleButtonClick({$row['id']})'>Edit</button> <button class = 'delete' onclick='handleButtonClick({$row['id']})'>Delete</button></td>";
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