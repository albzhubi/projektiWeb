<?php
    session_start();

    include('db.php');

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password)){
            $query = "insert into users (name,surname,username,email,password) values ('$name','$surname','$username','$email','$password')";

            mysqli_query($con,$query );

            echo "<script type = 'text/javascript'>alert('Ju jeni Regjistruar me Sukses!')</script>";
        }
        else{
            echo "<script type = 'text/javascript'>alert('Ju lutem shenoni te dhena Valide!')</script>";
        }
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
            <h1>REGISTER</h1>
             <form method = "POST"> <!-- me research per me bo edhe validimi //onsubmit="return validateForm(event)"> -->
            <div class="name">
                <label for="">Emri</label><br>
                <input type="name" id="name" name="name" required><br>
            </div><br>
            <div class="surname">
                <label for="">Mbiemri</label><br>
                <input type="surname" id="surname" name="surname" required><br>
            </div><br>
            <div class="username">
                <label for="">Username</label><br>
                <input type="username" id="username" name="username" required><br>
            </div><br>
            <div class="email">
                <label for="">Email</label><br>
                <input type="email" id="email" name="email" required><br>
            </div><br>
            <div class="password">
                <label for="">Password</label><br>
                <input type="password" id="password" name="password" required><br>
            </div>
            <br>
            <button type="submit">Submit</button><br>
            <div class="create">
                <p><a href="login.php">Jeni te regjistruar?</a></p>
            </div>
        </form>
    </div>
        
    <script>
        function validateForm(event){
            event.preventDefault();
            let name = document.getElementById('name').value;
            let surname = document.getElementById('surname').value;
            let username = document.getElementById('username').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            let nameRegex = /^[A-Z][a-z]{1,12}$/;
            if(!nameRegex.test(name)){
                alert('Please enter a valid name');
                return false;
            }
            let surnameRegex = /^[A-Z][a-z]{1,12}$/;
            if(!surnameRegex.test(surname)){
                alert('Please enter a valid surname');
                return false;
            }

            let usernameRegex = /^[a-z]{1,12}$/;
            if(!usernameRegex.test(username)){
                alert('Plase enter a valid username');
                return false;
            } 

            let emailRegex = /^[a-zA-z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
            if(!emailRegex.test(email)){
                alert('Please enter a valid email');
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