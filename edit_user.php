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
                    .form-container {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        height: 600px;
                        width: 350px;
                        margin: auto;
                        margin-top: 15px ;
                        padding: 20px;
                        border: 1px solid black;
                        border-radius: 10px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        position: relative;
                    }

                    .form-container label {
                        margin-bottom: 15px;
                        font-family: 'Poppins', sans-serif;
                    }

                    .form-container input,
                    .form-container textarea,
                    .form-container select {
                        width: 250px;
                        margin-bottom: 15px;
                        margin-left: 20px;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        display: block;
                        font-family: 'Poppins', sans-serif;
                    }

                    .form-container input[type="submit"] {
                        width: 150px;
                        height: 40px;
                        border: none;
                        border-radius: 20px;
                        font-size: 14px;
                        cursor: pointer;
                        color: rgba(113, 99, 186, 255);
                        background-color: #ebe9e9;
                        font-weight: bold;
                        position: absolute;                        
                        left: 45%; 
                        transform: translateX(-50%); 
                    }

                    .form-container input[type="submit"]:hover {
                        background-color: #0e4569;
                    }

                    #logo {
                        width: 150px;
                        height: 60px;
                        left: 0;
                        top: 0%;
                    }

                    .payment-icon {
                        margin-left: 100px;
                        margin-right: 20px;
                    }

                    .dropdown {
                        position: relative;
                        display: inline-block;
                        cursor: pointer;
                    }

                    .dropdown-content {
                        color: #000;
                        display: none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 160px;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        padding: 12px 16px;
                        z-index: 1;
                        border-radius: 15px;
                    }

                    .dropdown:hover .dropdown-content {
                        display: block;
                    } 
                    .editForm{
                        font-family: 'Poppins', sans-serif;
                    }
                    /*header content*/
                    *{
                    margin: 0;
                    padding: 0;
                    border: none;
                    outline: none;
                    box-sizing: border-box;
                    font-family:'Poppins', sans-serif;
                }
                    .header-content{
                    position: relative;
                    background: #ebe9e9;
                    width: 100%;
                    padding: 1rem;
                }

                .header-wrapper img{
                    width: 50px;
                    height: 50px;
                    cursor: pointer;
                    border-radius: 50%;
                }
                .header-wrapper{
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-wrap: wrap;
                    background: #fff;
                    border-radius: 10px;
                    padding: 10px 2rem;
                    margin-bottom: 1rem;
                }
                .header-title{
                    color: rgba(113, 99, 186, 255);
                }
                .user-info{
                    display: flex;
                    align-items: center;
                    gap: 1rem;
                }
                span{
                    cursor: pointer;
                    font-weight: bold;
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
        </div>
        <div class="editForm">
            <div class="form-container">
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
            </div>
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
