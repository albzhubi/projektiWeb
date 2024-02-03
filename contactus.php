<?php
   include('db.php');
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>

        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400&family=Montserrat:wght@300&family=Open+Sans:wght@700&family=Poppins&display=swap');
        body{
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f2f2f2;
        }
        .main{
            padding: 50px 0;
        }
       
        .toursHeader{ 
            background-color: black; 
        }
        .contact-form{
            width: 85%;
            max-width: 600px;
            background: #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px 40px 60px;
            box-sizing: border-box;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 20px #000000b3;
            font-family: 'Poppins', sans-serif;
            margin-top: 60px;
            
        }
        .contact-form h1{
            margin-top: 0;
            font-weight: 200;
        }
        .txtb{
            border: 1px solid gray;
            margin: 8px 0;
            padding: 12px 18px;
            border-radius: 8px;
        }
        .txtb label{
            display: block;
            text-align: left;
            color:  #333;
            text-transform: uppercase;
            font-size: 13px;
        }
        .txtb input,.txtb textarea{
            width: 100%;
            border: none;
            background: none;
            outline: none;
            font-size: 18px;
            margin-top: 6px;
        }
        .btn{
            display: block;
            background: #9b59b6;
            padding: 14px 0;
            color: white;
            text-transform: uppercase; 
            cursor: pointer;
            margin-top: 8px;
            width: 100%;
        }

        footer{
            margin-top: 700px;
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
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
            border-radius: 15px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .contact-form input[type="submit"] {
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

    </style>
</head>
<body>

    <?php include 'header.php' ?>

    <div class="contact-form">
        <h1>Contact Us</h1>
            <form>
                <div class="txtb">
                    <label>Name: </label>
                    <input type="text" name="name" value="" >
                </div>


                <div class="txtb">
                    <label>Email: </label>
                    <input type="email" name="email" value="">
                </div>

               <div class="txtb">
                    <label>Message: </label>
                    <textarea name="message"></textarea>
                </div>

                <input type="submit" value="Send">

            </form>
    </div>



    <?php include 'footer.php' ?>
    
    
</body>
</html>