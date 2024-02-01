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
            background-color: white;
        }
        .main{
            padding: 50px 0;
        }
        /* pjesa per descriptions */
        .tour-container{
            display: flex;
            column-gap: 30px;
            justify-content: center;

        }
        .tour-container:nth-child(2){
            flex-direction: row-reverse;
        }
        .description1, .description2, .description3{
            width: 75%;
        }
        /* pjesa per sliderin */
        .image-slider{
            width: 100%;
            height: 350px;
            position: relative;
            background-image: url(./images/utopia1.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            transition: 0.3s;
            margin-bottom: 50px;
        }
        .image-slider * {
            box-sizing: border-box;
            
        }

        .caption{
            background: linear-gradient(rgba(0,0,0,0),#000);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 4em 1em 2em 1em;
            text-align: center;
        }
        .caption h1{
            margin: 0;
            color: #fff;
        }
        .tour-container p {
            color: #8a8a8a;
        }
        .arrow-left,
        .arrow-right{
            background: #fff;
            position: absolute;
            top: 40%;
            width: 3em;
            height: 3em;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: 0.3s;
        }
        .arrow-left:hover,
        .arrow-right:hover{
            background: #000;
            color: #fff;
        }
        .arrow-left{
            left: 1em;
        }
        .arrow-right{
            right: 1em;
        }

        .image-fade {
            animation: imgFade 0.5s ease-in-out;
        }

        @keyframes imgFade{
            0%{opacity: 0;}
            100%{opacity: 1;}
        }

        #logo{
            width: 100%;
            height: 60px;
            left: 0;
            top: 0%;
        }  
        .toursHeader{ 
            background-color: black; 
        }
        .image-slider2 {
            width: 100%;
            height: 350px;
            position: relative;
            background-image: url(./images/astroworld1.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            transition: 0.3s;
            margin-bottom: 50px;

            float: right;
        }

        .image-slider2 * {
            box-sizing: border-box;
        }

        .caption2 {
            background: linear-gradient(rgba(0, 0, 0, 0), #000);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 4em 1em 2em 1em;
            text-align: center;
        }

        .caption2 h1 {
            margin: 0;
            color: #fff;
        }

        .caption2 p {
            color: #8a8a8a;
        }

        .arrow-left2,
        .arrow-right2 {
            background: #fff;
            position: absolute;
            top: 40%;
            width: 3em;
            height: 3em;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .arrow-left2:hover,
        .arrow-right2:hover {
            background: #000;
            color: #fff;
        }

        .arrow-left2 {
            left: 1em;
        }

        .arrow-right2 {
            right: 1em;
        }

        .image-fade2 {
            animation: imgFade2 0.5s ease-in-out;
        }

        @keyframes imgFade2 {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        .image-slider3 {
            width: 100%;
            height: 350px;
            position: relative;
            background-image: url(./images/birdeyeview1.png); 
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            transition: 0.3s;
            margin-bottom: 50px;

            float: none;
            clear: both;
        }
        
        .image-slider3 * {
            box-sizing: border-box;
        }

        .caption3 {
            background: linear-gradient(rgba(0, 0, 0, 0), #000);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 4em 1em 2em 1em;
            text-align: center;
        }

        .caption3 h1 {
            margin: 0;
            color: #fff;
        }

        .caption3 p {
            color: #8a8a8a;
        }

        .arrow-left3,
        .arrow-right3 {
            background: #fff;
            position: absolute;
            top: 40%;
            width: 3em;
            height: 3em;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .arrow-left3:hover,
        .arrow-right3:hover {
            background: #000;
            color: #fff;
        }

        .arrow-left3 {
            left: 1em;
        }

        .arrow-right3 {
            right: 1em;
        }

        .image-fade3 {
            animation: imgFade3 0.5s ease-in-out;
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

        @keyframes imgFade3 {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
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
    <?php include 'header.php'?>

    <!-- <a href="buytickets.php"><button type="submit" class="buyticketsbutton">Buy Tickets</button></a> -->
    <main>
        <div class="main"> 
            <div class="tour-container">
        <section class="image-slider">
            <div class="arrow-left">
                <img src="./images/left-arrow.png" width="30px" height="30px" alt="">
            </div>

            <div class="arrow-right">
                <img src="./images/right-arrow.png" width="30px" height="30px" alt="">
            </div>
            <div class="caption">
                <h1>UTOPIA</h1>
            </div>
        </section>
        <div class="description1">
            <p>The Circus Maximus Tour, also branded and promoted as Utopia Tour Presents Circus Maximus, is the ongoing fourth concert tour by American rapper and singer Travis Scott, in support of his fourth studio album, Utopia (2023). Fellow American singer Teezo Touchdown serves as the opening act of the tour, which is Scott's first concert tour in five years and his first tour since the Astroworld Festival crowd crush. The tour started on October 11, 2023, at the Spectrum Center in Charlotte, North Carolina, and will end on January 31, 2024, at the Amway Center in Orlando, Florida.</p>
        </div>
    </div>
    <div class="tour-container">
    <section class="image-slider2">
        <div class="arrow-left2">
            <img src="./images/left-arrow.png" width="30px" height="30px" alt="">
        </div>

        <div class="arrow-right2">
            <img src="./images/right-arrow.png" width="30px" height="30px" alt="">
        </div>
        <div class="caption2">
            <h1>ASTROWORLD</h1>
        </div>
    </section>
    <div class="description2">
        <p>The Astroworld – Wish You Were Here Tour was the third concert tour by American rapper Travis Scott, in support of his third studio album Astroworld (2018). The tour began in Baltimore at Royal Farms Arena on November 8, 2018.
            The tour was officially announced via Scott's Instagram on August 16, 2018. Scott announced "Ive Been Ready To Get Back On Road For A Long Time!! Astroworld Tour Is Finally Here!!". In August 2018, prior to the start of the tour, Scott announced via Instagram "this is leg one Europe and other cities coming soon". At the start of the tour, Scott announced "more dates TBS". Scott also announced that Virgil Abloh, Sheck Wes, Trippie Redd, and Gunna would perform opening acts.</p>
    </div>
    </div>
    <div class="tour-container">
    <section class="image-slider3">
        <div class="arrow-left3">
            <img src="./images/left-arrow.png" width="30px" height="30px" alt="">
        </div>

        <div class="arrow-right3">
            <img src="./images/right-arrow.png" width="30px" height="30px" alt="">
        </div>
        <div class="caption3">
            <h1>BIRDS EYE VIEW</h1>
        </div>
    </section>
    <div class="description3">
        <p>Santa Barbara was the first stop on Travis Scott’s Bird’s Eye View tour, a mega-spectacle featuring state-of-the-art lights, heavy-metal-style smoke effects, and a gigantic mechanical bird with laser eyes. All of which raises the question: Is Scott rap’s next big thing, or is he just a new coat of feathers on the same old goose? A fast, confident rapper, Scott’s very up-to-date flow makes him a strong match with other hot artists like 2 Chainz and Future. Both men have verses on Scott’s best track, “3500,” which was also the best song of the concert.</p>
    </div>
    </div>
    </div>
</main>

<?php include 'footer.php' ?>


    <script>
        const slider = document.querySelector('.image-slider');
        const arrLeft = document.querySelector('.arrow-left');
        const arrRight = document.querySelector('.arrow-right');
        const heading = document.querySelector('.caption h1');


        const images = [
            "./images/utopia1.jpg","./images/utopia2.png","./images/utopia3.jpg"
        ];

        const headings = [
            "New York","Tokyo","Japan","Dubai","UAE"
        ];

        let id = 0;

        function slide(id) {
            slider.style.backgroundImage = `url(${images[id]})`;

            slider.classList.add('image-fade');

            setTimeout(() => {
                slider.classList.remove('image-fade');
            },550);

            heading.innerText = headings[id];
         }

         arrLeft.addEventListener('click',()=>{
            id--;
            if(id<0){
                id = images.length - 1;
            }

            slide(id);

         });

         arrRight.addEventListener('click',() => {
            id++;

            if(id > images.length - 1){
                id = 0;
            }

            slide(id);
         })

    </script>

    <script>
        const slider2 = document.querySelector('.image-slider2');
        const arrLeft2 = document.querySelector('.arrow-left2');
        const arrRight2 = document.querySelector('.arrow-right2');
        const heading2 = document.querySelector('.caption2 h1');

        const images2 = [
            "./images/astroworld1.jpg","./images/astroworld2.webp","./images/astroworld3.jpg"
        ];

        const headings2 = [
            "New York","Tokyo","Japan","Dubai","UAE"
        ];


        let id2 = 0;

        function slide2(id2) {
            slider2.style.backgroundImage = `url(${images2[id2]})`;

            slider2.classList.add('image-fade');

            setTimeout(() => {
                slider2.classList.remove('image-fade');
            },550);

            heading2.innerText = headings2[id2];
         }

        arrLeft2.addEventListener('click',()=>{
            id2--;
            if(id2<0){
                id2 = images2.length - 1;
            }

            slide2(id2);

         });

         arrRight2.addEventListener('click',() => {
            id2++;

            if(id2 > images2.length - 1){
                id2 = 0;
            }

            slide2(id2);
         })
    </script>

    <script>
        const slider3 = document.querySelector('.image-slider3');
        const arrLeft3 = document.querySelector('.arrow-left3');
        const arrRight3 = document.querySelector('.arrow-right3');
        const heading3 = document.querySelector('.caption3 h1');


        const images3 = [
            "./images/birdeyeview1.png","./images/birdseyeview2.png","./images/birdseyeview3.jpg"
        ];

        const headings3 = [
            "New York","Tokyo","Japan","Dubai","UAE"
        ];

        let id3 = 0;

        function slide3(id3) {
            slider3.style.backgroundImage = `url(${images3[id3]})`;

            slider3.classList.add('image-fade');

            setTimeout(() => {
                slider3.classList.remove('image-fade');
            },550);

            heading3.innerText = headings3[id3];
         }

        arrLeft3.addEventListener('click',()=>{
            id3--;
            if(id3<0){
                id3 = images3.length - 1;
            }

            slide3(id3);

         });

         arrRight3.addEventListener('click',() => {
            id3++;

            if(id3 > images3.length - 1){
                id3 = 0;
            }

            slide3(id3);
         })
    </script>
    
</body>
</html>