<header class="toursHeader"> 
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

            if (!isset($_SESSION['role']) || (isset($_SESSION['role']) && $_SESSION['role'] !== 'admin')) :
            ?>
                <li><a href="contactus.php">Contact Us</a></li>
            <?php
            endif; 

            if (isset($_SESSION['user_id'])):
            ?>
                <li>
                    <div class="dropdownC">
                        <span>Profile &#11167;</span>
                        <div class="dropdownC-content">
                            <p><?php echo $_SESSION['user_name']; ?></p>
                            <a href="logout.php">Log out</a>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
            
            <div class="dropdown">
        <button class="dropbtn" style='font-size:20px; color: white; background-color: black;'> &#x1F893; </button>
            <div class="dropdown-content">
                    <a href="index.php">Home</a><br>
                    <a href="tours.php">Tours</a><br>
                    <a href="store.php">Store</a><br>

                    <?php 
                    if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') :
                    ?>
                        <a href="dashboard.php">Dashboard</a>
                    <?php endif; ?>

                    <?php if (!isset($_SESSION['role']) || (isset($_SESSION['role']) && $_SESSION['role'] !== 'admin')) : ?>
                        <a href="contactus.php">Contact Us</a>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['user_id'])): ?>
                        <a href="buytickets.php">Buy Tickets</a><br>
                        <p><?php echo $_SESSION['user_name']; ?></p>
                        <a href="logout.php">Log out</a><br>
                    <?php else: ?>
                        <a href="login.php">Log in</a><br>
                    <?php endif; ?>

                </div>
            </div>

    </div>
</header>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400&family=Montserrat:wght@300&family=Open+Sans:wght@700&family=Poppins&display=swap');

        body{
            background-color: white;
            padding: 0;
            margin: 0;
        }  
        a{
            color: inherit;
            text-decoration: none;
        }
        header.home {
            background-image: url(./images/foto3.jpg);
            background-size:cover;  
            background-repeat: no-repeat;
            background-position: top;
            height: 700px;

        }
        header.tours {
            background-repeat: no-repeat;
            background-position: top;
        }
        header .header{
            top: 0;
            /* position: fixed; */
            max-width: 80%;
            width: 100%;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            left: 0;
            right: 0;
            padding: 15px 0px;
        }
        header.home:before{
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            height: 700px;
            background-color: rgba(0, 0, 0, 0.5);   
        }

        header .nav-list {
            display: flex;
            column-gap: 30px;
            z-index: 999;
            
        }
        header li{
            color: white;
            display: inline;
            font-size: 22px;
            font-family: 'Poppins', sans-serif;
        }
        header a{
            color: inherit;
            text-decoration: none;
        }

        .logo{
            z-index: 999;
        }
        #logo{
            width: 100%;
            height: 60px;
            left: 0;
            top: 0%;
        } 
        .main{
            max-width: 80%;
            width: 100%;
            margin: auto;
            background-color: white;
        }
        .dropdownC {
            position: relative;
            display: inline-block;
            cursor: pointer;
            }

            .dropdownC-content {
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

            .dropdownC:hover .dropdownC-content {
            display: block;
        }


            @media (max-width: 1000px) {
        header .nav-list li:not(.dropdownC) {
            display: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 15px;
            cursor: pointer;
        }
        .dropdown-content a  {
            display: block;
            padding: 10px; 
            margin: 0; 
            text-decoration: none;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            cursor: pointer;
        }
    }

    @media (min-width: 1000px) {
        .dropdown {
            display: none;
        }
    }
    </style>