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
        /* @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400&family=Montserrat:wght@300&family=Open+Sans:wght@700&display=swap'); */
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400&family=Montserrat:wght@300&family=Open+Sans:wght@700&family=Poppins&display=swap');
        
        .toursHeader{
            background-color: black;
        }
 
        footer{
            height: 100px;
        }

        main .tickets{
            /* background: url(https://img.freepik.com/premium-vector/modern-colorful-3d-wave-wide-banner-background-abstract-background-banner-design-web-banner-texture-header-website-vector-abstract-graphic-design-banner-pattern-background-template_181182-16317.jpg); */
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-position: center;
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form-container form{
            display: flex;
            flex-direction: column;
            height: 300px;
            width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
    
        }

        .form-container form input, .form-container form select{
            width: 250px;
            margin-bottom: 15px;
            margin-left: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            display: block;
        } 

        #logo{
            width: 150px;
            height: 60px;
            left: 0;
            top: 0%;
        }  

        .form-container form select{
            width: 270px;
        }


        .tickets h1,input,select,button{
            font-family: 'Poppins', sans-serif;
        }

        /* Pjesa e submitit te biletes */
        .payment-icon{
            margin-left: 100px;
            margin-right: 20px;
        }

        .submitticket button{
            width: 250px;
            height: 50px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 175px;

        }

        .submitticket button:hover{
            background-color: #145b97;
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


    </style>

</head>
<body>
    <!-- <header class="buyticketsHeader"> 
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

            <li><a href="buytickets.php">Buy Tickets</a></li>
             <?php 
            if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') :
             ?>
             <li><a href="dashboard.php">Dashboard</a></li>
            
            <?php
             endif; 
              ?>
              <?php if (!isset($_SESSION['role']) || (isset($_SESSION['role']) && $_SESSION['role'] !== 'admin')) : ?>
                <li><a href="contactus.php">Contact Us</a></li>
            <?php endif; ?>

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

    <?php include 'header.php'?>
    <main>
    <div class="tickets">
        <h1>Blej tani bileten</h1>
        <div class="form-container">    
            <form action="" id="ticketForm">
                <div class="name">
                    <input type="text" id="name" placeholder="Add name"><br>
                </div><br>
                <div class="surname">
                    <input type="text" id="surname" placeholder="Add surname"><br>
                </div><br>
                <div class="email">
                    <input type="email" id="email" placeholder="Add email"><br>
                </div><br>
                <div class="select-container">
                    <select name="select" id="select">
                        <option value="Choose">Choose place</option>
                        <option value="Gjakovë">Gjakovë</option>
                        <option value="New York">New York</option>
                        <option value="Paris">Paris</option>
                        <option value="London">London</option>
                    </select>
                </div><br>

                <div class="date">
                    <input type="date" id="date" name="date" placeholder="Add date" required><br>
                </div><br>

                <div class="payment-icon">
                    <img src="./images/kartela1.jfif" width="60px" height="40px" alt="">
                    <img src="./images/kartela2.png" width="60px" height="40px" alt="">
                </div>

                <div class="submitticket">
                    <button type="submit" id="submitButton">Submit</button>
                </div>

            </form>
        </div>
    </div>
</main>




<?php include 'footer.php' ?>


<script>
    document.getElementById('submitButton').addEventListener('click',function(){
        var name = document.getElementById('name').value;
        var surname = document.getElementById('surname').value;
        var email = document.getElementById('email').value;
        var select = document.getElementById('select').value;
        var date = document.getElementById('date').value;

        var message = "";
        message += "Bileta juaj\n";
        message += "-Emri: " + name + "\n";
        message += "-Mbiemri: " + surname + "\n";
        message += "-Email: " + email + "\n";
        message += "-Qyteti: " + select + "\n";
        message += "-Data:" + date;

        alert(message);
    });

    document.getElementById('ticketForm').addEventListener('submit',function(event){
        event.preventDefault();
    })
</script>

</body>
</html>