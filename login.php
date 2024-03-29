<?php
    session_start();    

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password']; 

        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            $query = "select * from users where username = '$username' limit 1";
            $result = mysqli_query($con,$query,);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password)
                    {
                        $_SESSION['role'] =  $user_data['role'];
                        $_SESSION['user_id'] = $user_data['id'];
                        $_SESSION['user_name'] = $user_data['username']; //nese dojim mi paraqit n dropdown button emrin mbiemrin : $user.data['name]. $user_data['surname'];
                        echo $_SESSION['role'];
                        header("location: index.php");
                        die;
                        
                    }
                }
            }
            echo "<script type ='text/javascript'> alert('wrong username or password')</script>";
        }
        echo "<script type ='text/javascript'> alert('wrong username or password')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400&family=Montserrat:wght@300&family=Open+Sans:wght@700&display=swap'); */
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400&family=Montserrat:wght@300&family=Open+Sans:wght@700&family=Poppins&display=swap');
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #9E9DA6;
        }
        a{
            display: flex;
            justify-content: center;
            text-align: center;
            text-decoration: none;
            color: inherit;
        }
        .container{
            width: 400px;
            background-color: white;
            border-radius: 10px;
            padding: 20px;
        }
        .container h1{
            text-align: center;
            border-bottom: 1px solid silver;
        }
        input{
            width: 100%;    
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid #2691d9;
        }
        label{
            margin-left: 10px;
        }
        button{
            width: 100%;
            height: 50px;
            border: 1px solid;
            border-radius: 25px;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            
        }
        button:hover{
            background-color: #145b97;
        }
        
        
    </style>
</head>
<body>

    <div class="container">
            <h1>LOGIN</h1>
         <form method="POST" onsubmit="> return validateForm(event)"> 
            <div class="username">
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username" required><br>
            </div><br>
            <div class="password">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password"><br>
            </div>
            <br>
            <button type="submit" name="submit">Submit</button><br>
            <div class="create">
                <p><a href="register.php">Nuk jeni regjistruar ende? Regjistrohu</a></p>
            </div>
        </form>
    </div>
        
    <script>
        function validateForm(event){
            //event.preventDefault();
            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;

            let usernameRegex = /^[a-z]{1,12}$/;
            if(!usernameRegex.test(username)){
                alert('Plase enter a valid username');
                return false;
            }
            
            let passwordRegex = /^[a-z]+[0-9]{1,8}$/;
            if(!passwordRegex.test(password)){
                alert('Please enter a valid password');
                return false;
            }
            if(password.length < 6){
                alert('Password must be at least 6 characters');
                return;
            } 
            window.location.href = "index.php";
        }
    </script>

</body>
</html>