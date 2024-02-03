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
    </header>

    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400&family=Open+Sans:wght@700&display=swap'); */
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
