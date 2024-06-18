<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="./assets/images/hobes_tech_logo.jpeg" type="image/icon type">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/header/header.css">
    <link rel="stylesheet" href="./style/contact/contact.css">
</head>
<body>
    <header>
        <div class="logo" id="logofirst">
            <img src="./assets/images/hobes_tech_logo.jpeg" alt="">
        </div>
        <nav class="front">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="products">Products</a></li>
                <li><a href="career">Career</a></li>
                <li><a href="contact"  style="text-decoration: underline;text-underline-offset: 8px;">Contact</a></li>
            </ul>
            <button id="hamburgermenu"><img src="./assets/images/hamburger.svg" alt=""></button>
        </nav>
        <nav class="side">
            <div class="sidenav" id="sidenav">
                <div id="closesidenav">
                    <img src="./assets/images/cross.svg" class="cross" alt="">
                </div>
                <div class="sidenavlogo">
                    <img src="./assets/images/hobes_tech_logo.jpeg" alt="">
                </div>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="products">Products</a></li>
                    <li><a href="career">Career</a></li>
                    <li><a href="contact" style="text-decoration: underline;text-underline-offset: 8px;">Contact</a></li>
                </ul>
                <div class="socials">
                    <ul>
                        <li><a href="https://www.facebook.com/hobestech" target="_blank"><img
                                    src="./assets/images/facebook.svg" alt=""></a></li>
                        <li><a href="https://www.instagram.com/hobes.tech/" target="_blank"><img
                                    src="./assets/images/instagram.svg" alt=""></a></li>
                        <li><a href="https://www.linkedin.com/company/hobes-tech/" target="_blank"><img
                                    src="./assets/images/linkdeln.svg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bluraftersidenav"></div>
    </header>
    <script src="script/header/header.js"></script>


    <div class="main">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3532.4380023376575!2d85.3198931114458!3d27.703759676085333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39eb19033a9c4545%3A0x100478b60036e8ef!2sHOBES%2C%20Kathmandu%2044600!3m2!1d27.7037597!2d85.32247339999999!5e0!3m2!1sen!2snp!4v1718361714436!5m2!1sen!2snp" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="mapdown">
        <div class="contactForm">
            <div class="titleContact">
                <span>Contact Form</span>
            </div>
            <form action="">
                <div class="firstrow">
                    <input type="text" name="Name" id="Name" placeholder="Name">
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="secondrow">
                    <input type="text" name="subject" id="subject" placeholder="Subject">
                </div>
                <div class="thirdrow">
                    <textarea name="Message" id="Message" placeholder="Message"></textarea>
                </div>
                    

            </form>
        </div>
        </div>


    </div>
</body>
</html>