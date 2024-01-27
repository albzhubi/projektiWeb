<?php
   include('db.php');
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

        .header-desc{
            z-index: 999;
        }

        .welcome{
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            align-content: flex-start;
            padding-top: 150px;            
            font-family: 'Poppins', sans-serif;
            color: rgba(255, 255, 255, 0.9);
            font-weight: bold;
            font-size: 40px;
            z-index: 9999999999;
        }
        .welcome h1{
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            padding-left: 80px; 
            z-index: 9999;

        }
        .welcome h3{
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            padding-left: 80px;
            margin-top: -50px;
            z-index: 9999;

        }
        
        #logo{
            width: 150px;
            height: 60px;
            left: 0;
            top: 0%;
        }  
        .albumet{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: -50px;

        }
        .fototEAlbumeve{
            width: 20%;
            margin: 40px;

        }
        .fototEAlbumeve img {
            width: 100%;
            height: auto;
            border-radius: 20px;
        }
        .discography{
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
                
        }      


          /* Pjesa e countdown */
          *{
            box-sizing: border-box;
        }
        .countdown-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 70vh;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .countdown-container h1{
            margin-top: 100px;
            font-size: 4rem;
            color: black;
            text-shadow: 2px 7px 5px rgba(0, 0, 0, 0.3),
            0px -4px 10px rgba(255, 255, 255, 0.3)
        }
        .countdown-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            color: black;
            /* border-bottom: 1px solid black; */
            padding-bottom: 40px;

        }

        .countdown-box{
            display: flex;
            justify-self: center;
        }

        .text{
            font-weight: bold;
            font-size: 6rem;
            line-height: 1;
            margin: 1rem 2rem;
            text-shadow: 2px 7px 5px rgba(0, 0, 0, 0.3),
            0px -4px 10px rgba(255, 255, 255, 0.3)
        }

        .countdown-first{
            text-align: center;
        }
        .countdown-first span{
            font-size: 1.3rem;
            text-shadow: 2px 7px 5px rgba(0, 0, 0, 0.3),
            0px -4px 10px rgba(255, 255, 255, 0.3)
        }     

        .button-container{
            display: flex;
            justify-content: space-between;
            margin-top: 40px; 
            padding: 40px;    
            border: none;
            border-radius: 20px;    
  
        }
        .buyticketsbutton{
            font-size: 20px;
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            border: none;
            border-radius: 20px;
            padding: 10px;
            cursor: pointer;
            color: black;
            margin-left: 40px;
        }      
        
        .album-title,
        .album-description{
            font-family: 'Poppins', sans-serif;
        }
      
    </style>

</head>
<body>
    <header class="home"> 
        <div class="header">
            <div class="logo">
                <a href="index.php">
                     <img src="./images/logo4.png" width="40px" height="40px" id="logo"> 
                </a>
            </div>
       
        <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="tours.html">Tours</a></li>
            <li><a href="store.php">Store</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="buytickets.html">Buy Tickets</a></li>
            <li><a href="login.php">Log in</a></li>
         </ul>
        </div>
        <div class="header-desc">
            <div class="welcome">
                <h1>Utopia Tours</h1>
                <h3>Presents Circus Maximus</h3>
            </div>
        </div>
    </header>
    <main>

        <div class="countdown-container">
            <h1>See you after : </h1>
    
            <div class="countdown-box">
                <div class="countdown-el days">
                    <p class="text" id="days">0</p>
                    <span>days</span>
                </div>
    
                <div class="countdown-el hours">
                    <p class="text" id="hours">0</p>
                    <span>hours</span>
                </div>
    
                <div class="countdown-el mins">
                    <p class="text" id="mins">0</p>
                    <span>minutes</span>
                </div>
    
                <div class="countdown-el seconds">
                    <p class="text" id="seconds">0</p>
                    <span>seconds</span>
                </div>
            </div>

            <div class="button-container">
                <a href="login.php"><button type="submit" class="buyticketsbutton">Buy Tickets</button></a>
                <a href="tours.html"><button type="submit" class="buyticketsbutton">Other Tours</button></a>
            </div>

        </div>

        <div class="main5">  
            <div class="discography">
                <h1>Discography</h1>
            </div>
            <div class="albumet" > 
                <div class="fototEAlbumeve">
                    <div class="utopia"> 
                        <a href="https://music.apple.com/us/album/utopia/1699712635" target="_blank"> <img src="./images/utopia.jpg" alt=""></a> 
                        <h1 class="album-title">Utopia</h1>
                        <p class="album-description">Utopia is the fourth studio album by American rapper Travis Scott. It was released through Cactus Jack and Epic Records on July 28, 2023. </p>
                    </div>
                </div>
                <div class="fototEAlbumeve">
                    <div class="jackboys">
                        <a href="https://music.apple.com/us/album/jackboys/1492785997" target="_blank"> <img src="./images/jackboysCover.jpg" alt=""></a> 
                        <h1 class="album-title">JackBoys</h1>
                        <p class="album-description">JackBoys is a collaborative compilation album by American record label Cactus Jack Records, under the name JackBoys, led by American rapper and singer Travis Scott. </p>
                    </div>
                </div>
                <div class="fototEAlbumeve">
                    <div class="astroworld"> 
                        <a href="https://music.apple.com/us/album/astroworld/1421241217" target="_blank"> <img src="./images/astroworld.jpg" alt=""></a> 
                        <h1 class="album-title">Astroworld</h1>
                        <p class="album-description">Astroworld  is the third studio album by American rapper Travis Scott. It was released on August 3, 2018, through Cactus Jack Records and Grand Hustle Records, and distributed by Epic Records.</p>
                    </div>
                </div>
                <div class="fototEAlbumeve">
                    <div class="hunchoJack">
                        <a href="https://music.apple.com/us/album/huncho-jack-jack-huncho/1440902652" target="_blank" > <img src="./images/hunchoJackCover.jpg" alt=""></a> 
                        <h1 class="album-title">HunchoJack</h1>
                        <p class="album-description">Huncho Jack, Jack Huncho is the debut studio album by American hip hop duo Huncho Jack, which consists of American rappers Travis Scott and Quavo. </p>
                    </div>
                </div>
                <div class="fototEAlbumeve">
                    <div class="birdsInTheTrap">
                        <a href="https://music.apple.com/us/album/birds-in-the-trap-sing-mcknight/1150135681" target="_blank" > <img src="./images/birdsInTheTrapCover.jpg" alt=""></a>
                        <h1 class="album-title">Birds In The Trap</h1>
                        <p class="album-description">Birds in the Trap Sing McKnight is the second studio album by American rapper Travis Scott. It was released on September 2, 2016, through Grand Hustle Records and distributed by Epic Records. </p>
                    </div>
                </div>
                <div class="fototEAlbumeve">
                    <div class="rodeo">
                        <a href="https://music.apple.com/us/album/rodeo/1456176981" target="_blank" > <img src="./images/rodeoCover.jpg" alt=""></a>
                        <h1 class="album-title">Rodeo</h1>
                        <p class="album-description">Rodeo is the debut studio album by American rapper and record producer Travis Scott. It was released on September 4, 2015, through Grand Hustle Records and distributed by Epic Records.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-section foot1">
                <h3>Festival Tickets</h3>
                <div class="line"></div>
            </div>
            <div class="footer-section foot2">
                <ul class="aboutfooter">
                    <a href="index.php"><li>Home</li></a>
                  <a href="tours.html"><li>Tours</li></a>
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


    <script>

        const daysEl = document.getElementById("days");
        const hoursEl = document.getElementById("hours");
        const minsEl = document.getElementById("mins");
        const secondsEl = document.getElementById("seconds");

        const newYears = "14 Feb 2024";

        function countdown() {
            const newYearsDate = new Date(newYears);
            const currentDate = new Date();

            const totalSeconds = (newYearsDate - currentDate) / 1000;

            const days = Math.floor(totalSeconds / 3600 / 24);
            const hours = Math.floor(totalSeconds / 3600) % 24;
            const mins = Math.floor(totalSeconds / 60) % 60;
            const seconds = Math.floor(totalSeconds) % 60;

            daysEl.innerHTML = days;
            hoursEl.innerHTML = formatTime(hours);
            minsEl.innerHTML = formatTime(mins);
            secondsEl.innerHTML = formatTime(seconds);
        }

        function formatTime(time){
            return time < 10 ? `0${time}` : time;
        }

        countdown();

        setInterval(countdown,1000);

    </script>


    
</body>
</html>