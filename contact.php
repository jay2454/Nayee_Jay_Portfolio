<?php

include('includes/contact.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/master.css">

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Jay</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div class="logo-image">
                    <img src="images/Jay_Logo.png" class="img-fluid">
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.html" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="about.html" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="portfolio.html" class="nav__link">Portfolio</a></li>
                        <li class="nav__item"><a href="contact.php" class="nav__link active">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="<?php $_SERVER['PHP_SELF'];?>" class="contact__form">
                        <input type="text" name="Firstname" placeholder="First Name" class="contact__input">
                        <input type="text" name="Lastname"placeholder="Last Name" class="contact__input">
                        <input type="email" name="email"placeholder="Email" class="contact__input">
                        <textarea name="message" placeholder="Text here..." id="" cols="0" rows="10" class="contact__input"></textarea>
                        
                        <div class="g-recaptcha" data-sitekey="6LehnPoZAAAAANx_U5qrnyxoSqYMZuzAd0JTxsND"></div>
                        <input type="button" value="Submit" class="contact__button button">
                    </form>

                    <div class="status">

                    

                    </div>

                </div>
            </section>
        </main>

        
    <footer class="footer">
        <p class="footer__title">JAY</p>
            <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p> 2020 copyright all right reserved</p>
     </footer>


      <!--Scroll Reveal-->
        <script src="https://unpkg.com/scrollreveal"></script>

       <!--Mian JS-->
        <script src="js/main.js"></script>
    </body>
</html>