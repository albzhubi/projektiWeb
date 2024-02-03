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

    <!-- <header class="toursHeader"> 
        <div class="header">
            <div class="logo">
                <a href="index.php">
                    <img src="./images/logo4.png" id="logo">
                </a>
            </div>
       
        <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="tours.php">Tours</a></li>
            <li><a href="store.php">Store</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="buytickets.php">Buy Tickets</a></li>
            <?php 
            if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') :
             ?>
             <li><a href="dashboard.php">Dashboard</a></li>
            
            <?php
             endif; 
              ?>

            <?php
            if (isset($_SESSION['user_id'])):
            ?>

            <li>
                <div class="dropdown">
                    <span>Profile &#11167;</span>
                    <div class="dropdown-content">
                        <p><?php echo $_SESSION['user_name']; ?></p>
                        <a href="logout.php">Log out</a>
                    </div>
                </div>
            </li>

            <?php else: ?>

            <li><a href="login.php">Log in</a></li>

            <?php endif; ?>
         </ul>
        </div>
    </header> -->
    <?php include 'header.php' ?>

    <div class="contact-form">
        <h1>Contact Us</h1>
            <form action="process.php" method="POST">
                <div class="txtb">
                    <label>Full Name: </label>
                    <input type="text" name="fullname" value="" >
                </div>

                <div class="txtb">
                    <label>Subject: </label>
                    <input type="text" name="subject" value="" >
                </div>

                <div class="txtb">
                    <label>Email: </label>
                    <input type="email" name="email" value="">
                </div>

               <div class="txtb">
                    <label>Message: </label>
                    <textarea name="message"></textarea>
                </div>

                <input type="submit" value="Semd">

            </form>
    </div>


    <footer>
        <div class="footer-container">
            <div class="footer-section foot1">
                <h3>Festival Tickets</h3>
                <div class="line"></div>
            </div>
            <div class="footer-section foot2">
                <ul class="aboutfooter">
                    <a href="index.php"><li>Home</li></a>
                  <a href="tours.php"><li>Tours</li></a>
                   <a href="store.php"><li>Store</li></a>
                   <a href="login.php"><li>Buy Tickets</li></a>
                </ul>
                <h5>&copy; 2023 Alb&Lorik.All rights reserved</h5>
            </div>
            <div class="footer-section foot3">
                <div class="social-icons">
                <a href="https://www.instagram.com/travisscott/?hl=en"> <img src="./images/insta-icon.svg" ></a> 
                <a href="https://www.facebook.com/travisscottlaflame/" > <img src="./images/fb-icon.svg" alt="" ></a>
                <a href=" https://twitter.com/trvisXX?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor "> <img src="./images/twitter-icon.svg" alt=""> </a>
                <a href="https://open.spotify.com/artist/0Y5tJX1MQlPlqiwlOH1tJY"> <img src="./images/spotify.svg" alt=""> </a>
            </div>
                <p>Support: onlinetickets@gmail.com</p>
        </div>
        </div>
    </footer>
    
    
</body>
</html>