<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;400&family=Montserrat:wght@300&family=Open+Sans:wght@700&family=Poppins&display=swap');
        *{
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
            box-sizing: border-box;
            font-family:'Poppins', sans-serif;
        }
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        .tab button:hover {
            background-color: #ddd;
        }

       
        .tab button.active {
            background-color: #ccc;
        }

       
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .tabcontent#Users{
            display: block;
        }

        /*header content*/
        .header-content{
            position: relative;
            background: #ebe9e9;
            width: 100%;
            padding: 1rem;
        }

        .header-wrapper img{
            width: 50px;
            height: 50px;
            cursor: pointer;
            border-radius: 50%;
        }
        .header-wrapper{
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            background: #fff;
            border-radius: 10px;
            padding: 10px 2rem;
            margin-bottom: 1rem;
        }
        .header-title{
            color: rgba(113, 99, 186, 255);
        }
        .user-info{
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .search-box{
            background: rgb(237, 237, 237);
            border-radius: 15px;
            color: rgba(113, 99, 186, 255);
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 4px 12px;
        }
        .search-box input{
            background:transparent;
            padding: 10px;
        }
        .search-box i{
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.5s ease-out;
        }
        .search-box i:hover{
            transform: scale(1.2);
        }

        /*main content*/
        .main-content{
            background: #fff;
            margin-top: 1rem;
            border-radius: 10px;
            padding: 2rem;
        }
        .table-container{
            width: 100%;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        thead{
            background: rgba(113, 99, 186, 255);
            color: #fff;
        }
        th{
            padding: 15px;
            text-align: left;
        }
        tbody{
            background: #f2f2f2;
        }
        td{
            padding: 15px;
            font-size: 14px;
            color: #333;
        }
        tr:nth-child(even){
            background: #fff;
        }
        tfoot{
            background: rgba(113, 99, 186, 255);
            font-weight: bold;
            color: #fff;
        }
        tfoot td{
            padding: 15px;
            color: #fff;
        }
        .table-container button{
            color: green;
            background: none;
            cursor: pointer;
        }

    </style>  
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

    <body>

        <div class="header-content">
            <div class="header-wrapper">
                <div class="header-title">
                    <h2>Dashboard</h2>
                </div>
                <div class="user-info">
                    <div class="search-box">
                        <input type="text" placeholder="Search"/>
                        <a href="index.php"><img src="./images/admin.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'Users')">Users</button>
        <button class="tablinks" onclick="openCity(event, 'Products')">Produts</button>
        </div>

        <div id="Users" class="tabcontent">
            <?php include 'users.php'?>
        </div>

        <div id="Products" class="tabcontent">
            <?php include 'products.php' ?>
        </div>


        <script>
        function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        }
        </script>
        
        </body>
        </html> 
