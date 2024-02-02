<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['userId'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $updateQuery = "UPDATE users SET name='$name', surname='$surname', username='$username', email='$email', password='$password', role='$role' WHERE id=$userId";

    if ($con->query($updateQuery) === TRUE) {
        echo "User details updated successfully";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'dashboard.php';
                }, 2000); 
              </script>";
    } else {
        echo "Error updating user details: " . $con->error;
    }
}

$con->close();
exit();
?>
