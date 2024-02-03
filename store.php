<?php
    include 'db.php';
    session_start();
    $query = "SELECT * FROM products";
    $result = $con->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        #logo{
            width: 150px;
            height: 60px;
            left: 0;
            top: 0%;
        }  
       
        .toursHeader{ 
            height: 96px;
            background-color: black; 
        }
        main h3{
            text-align: center;
            font-size: 30px;
            margin: 0;
            padding-top: 10px;
        }
        a{
            text-decoration: none;
        }
        main .gallery{
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            justify-content: center;
            align-items: center;
            margin: 50px 0;
        }
        main .content{
            width: 20%;
            margin: 15px;
            box-sizing: border-box;
            float: left;
            text-align: center;
            border-radius: 20px;
            cursor: pointer;
            padding-top: 10px;
            box-shadow: 0 14px 20px rgba(0, 0, 0, 0.25),
            0 10px 10px rgba(0, 0, 0, 0.22);
            transition: .4s;
            background: #f2f2f2;
        }
        main .content:hover{
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16),
            0px 3px 6px rgba(0, 0, 0, 0.23);
            transform: translate(0px,-8px);
        }
        main img{
            width: 200px;
            height: 200px;
            text-align: center;
            margin: 0 auto;
            display: block;
        }
        main p{
            text-align: center;
            color: #b2bec3;
            padding-top: 0 8px;
        }
        main h6{
            font-size: 26px;
            text-align: center;
            color: #222f3e;
            margin: 0;
        }
        main ul{
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }
        main li{
            padding: 5px;
        }
        main .fa{
            font-size: 26px;
            transition: .4s;
            
        }
        main .checked{
            color:#ff9f43 ;
        }
        main .fa:hover{
            transform: scale(1.3);
            transition: .6s;
        }
        main button{
            text-align: center;
            font-size: 24px;
            color: #fff;
            width: 100%;
            padding:15px;
            border: 0;
            outline: none;
            cursor: pointer;
            margin-top: 5px;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        main .buy{
            background-color: #5cb85c;
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

        @media(max-width:1000px){
            main .content{
                width: 45%;
            }
        }
        @media(max-width:750px){
            main .content{
                width: 100%;
            }
        }

    </style>
</head>
<body>

    <?php include 'header.php' ?>

    
    <main>
        <div class="gallery">
            <?php
            while ($row = $result->fetch_assoc()) {
                echo '<div class="content">
                        <img src="' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['product_name']) . '">
                        <h3>' . htmlspecialchars($row['product_name']) . '</h3>
                        <p>' . htmlspecialchars($row['description']) . '</p>
                        <h6>$' . number_format($row['price'], 2) . '</h6>
                        <ul>';

                $numberOfStars = $row['review'];
                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= $numberOfStars) {
                        echo '<li><i class="fa fa-star checked"></i></li>';
                    } else {
                        echo '<li><i class="fa fa-star"></i></li>';
                    }
                }

                echo '</ul>
                        <form method="post" action="process_order.php">
                            <input type="hidden" name="product_id" value="' . $row['id'] . '">
                            <button type="submit" class="buy" name="buy_now">Buy Now</button>
                        </form>
                    </div>';
            }
            ?>
        </div>
    </main>
    <?php include 'footer.php' ?>
    
</body>
</html>