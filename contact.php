<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MangTataho Menu</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!--HEADER-->
    <header>
        <a href="index.php"><img src="assets/MangTataho.png" class="logo"></a>
        <div class="menu" onclick="toggleMenu();"></div>
            <!--SEARCH-->
            <div class="search">
                <input type="text" placeholder="Search">
                <i class="fa fa-search"></i>
            </div>
        <ul class="navigation">
        <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Products</a></li>
            <li><a href="about.php">About</a></li>
            <li><a class="active" href="contact.php">Contacts</a></li>
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
        </ul>
    </header>

    <section class="sub-header-contact">
        <div class="text-title">
            <h1>Get in Touch!</h1>
        </div>
    </section>


    <!-- Contact Us -->

    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2112386725275!2d120.98259631484015!3d14.587035789811125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca21ac302015%3A0x92dcca0f915010d9!2sTechnological%20University%20of%20the%20Philippines%20-%20Manila!5e0!3m2!1sen!2sph!4v1638340823556!5m2!1sen!2sph"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>


    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>TUP - Manila, COS - Building</h5>
                        <p>NCR - Metro Manila, Philippines</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+63 98700888800</h5>
                        <p>Monday to Saturday, 10AM to 8PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>ourwebpage@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>

            <div class="contact-col">
                <h1 class="sendFeedback">Send us your Feeback</h1>
                <br>
                <form action="form-handler.php" method="post">
                    <input type="text" name="name" placeholder="Enter your Name" required>
                    <input type="email" name="email" placeholder="Enter Email Address" required>
                    <input type="text" name="subject" placeholder="Enter your Subject" required>
                    <textarea rows="8" name="message" placeholder="Message"></textarea>
                    <!-- <button type="submit" class="hero-btn red-btn">Send Message</button> -->

                    <button> Send
                    </button>
                </form>
            </div>
    </section>

    <!-- Footer -->

    <footer>
        <h4>About Us</h4>
        <p>A group of programer missed taho the most in their childhoood time.<br>They regularly experiment the taho delicacy and took it to another level</p>

        <div class="icons">
            <br>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/login"><i class="fab fa-linkedin"></i></a>
        </div>

        <p>Made with <i class="far fa-heart"></i> by MangTataho IT Group. 2022.<br>Some Images and Product Ideas are from SoyBueno.</p>
    </footer>

    <!-- JavaScript for toggle Menu -->

    <script src="./js/script.js"></script>

</body>

</html>