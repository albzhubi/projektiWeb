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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400&family=Montserrat:wght@300&family=Open+Sans:wght@700&family=Poppins&display=swap');

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        .header-content {
            width: 100%;
            padding: 1rem;
            background: #ebe9e9;
        }

        .header-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            border-radius: 10px;
            padding: 10px 2rem;
            margin-bottom: 1rem;
        }

        .header-title {
            color: rgba(113, 99, 186, 255);
        }

        .user-info img {
            width: 50px;
            height: 50px;
            cursor: pointer;
            border-radius: 50%;
        }

        .container {
            max-width: 800px; 
            padding: 28px;
            margin: 20px;
            box-shadow: 0 15px 20px #ABB2B9;
        }

        h2 {
            font-size: 26px;
            font-weight: 600;
            text-align: center;
            color: #2f4f4f;
            padding-bottom: 8px;
            border-bottom: 1px solid silver;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .input-box {
            width: calc(50% - 10px); 
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .input-box label {
            color: #2f4f4f;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .input-box input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button-container{
            margin: 15px 0;
        }

        .button-container button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            font-size: 20px;
            color: #fff;
            border: none;
            border-radius: 5px;
            background-image: linear-gradient(to right, #aa076b, #61045f);
        }

        .button-container button:hover {
            background-image: linear-gradient(to right, #61045f, #aa076b);
        }
        span{
            cursor: pointer;
        }

            
    </style> 
<body> 
    <div class="header-content">
        <div class="header-wrapper">
            <div class="header-title">
                <span style='font-size:25px;' onclick="history.back()">&#8617 Dashboard</span>
            </div>
            <div class="user-info">
                <a href="dashboard.php"><img src="./images/admin.jpg" alt=""></a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <form method="post" action="update_user.php">
            <h2>Edit User</h2>
            <div class="content">
                <div class="input-box">
                    <label for="name">Name:</label>
                    <input type="hidden" name="userId" value="<?php echo $row['id']; ?>">
                    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
                </div>
                <div class="input-box">
                    <label for="surname">Surname:</label>
                    <input type="text" id="surname" name="surname" value="<?php echo $row['surname']; ?>" required>
                </div>
            </div>
            
            <div class="content">
                <div class="input-box">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>" required>
                </div>
                <div class="input-box">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                </div>
            </div>
            
            <div class="content">
                <div class="input-box">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>" required>
                </div>
                <div class="input-box">
                    <label for="role">Role:</label>
                    <input type="text" id="role" name="role" value="<?php echo $row['role']; ?>" required>
                </div>
            </div>
            
            <div class="button-container">
                <button type="submit">Save Changes</button>
            </div>
        </form>
    </div>
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
