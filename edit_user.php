<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $userId = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $userId";
    $result = $con->query($query);

    if ($result && $row = $result->fetch_assoc()) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit User</title>
        </head> 
        <body> 
            <h2>Edit User</h2>
            <form method="post" action="update_user.php">
                <input type="hidden" name="userId" value="<?php echo $row['id']; ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>

                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" value="<?php echo $row['surname']; ?>" required>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>" required>

                <label for="role">Role:</label>
                <input type="text" id="role" name="role" value="<?php echo $row['role']; ?>" required>

                <input type="submit" value="Save Changes">
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "User not found.";
    }

    $con->close();
    exit();
}
?>
