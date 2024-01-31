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
                <a href="buytickets.php"><li>Buy Tickets</li></a>
            </ul>
            <h5>&copy; 2023 Alb&Lorik. All rights reserved</h5>
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

<style>
    footer {
        background-color: #e0e0e0;
        padding: 50px 0px;
        width: 100%;
    }

    footer p {
        font-family: 'Poppins', sans-serif;
    }

    .footer-section.foot2 {
        font-family: 'Poppins', sans-serif;
    }

    .footer-section {
        display: flex;
    }

    .footer-container {
        column-gap: 30px;
        display: flex;
        justify-content: flex-start;
        width: 100%;
        max-width: 80%;
        margin: auto;
    }

    .foot1 {
        flex: 0.5;
        justify-content: space-between;
        font-family: 'Poppins', sans-serif;
    }

    .foot1 .line {
        border: 1px solid #9b9b9bab;
        height: 80%;
        margin: auto 0;
    }

    .footer-section.foot2 {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        row-gap: 10px;
        flex: 1;
    }

    .footer-section.foot3 {
        flex: 1;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        row-gap: 10px;
    }

    .foot3 p {
        margin: 0;
    }

    .aboutfooter {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-items: flex-start;
        align-content: center;
        padding: 0;
        column-gap: 15px;
        margin: 0;
    }

    .aboutfooter li {
        list-style-type: none;
    }

    .foot2 h5 {
        margin: 0;
    }

    .foot3 .social-icons {
        display: flex;
        column-gap: 15px;
    }

    .foot3 .social-icons img {
        width: 20px;
    }
</style>
