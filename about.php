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
            <li><a class="active" href="about.php">About</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
        </ul>
    </header>


    <section class="sub-header-about">
        <div class="text-title">
            <h1>About Us</h1>
        </div>
    </section>

    <section class="history">
        <div class="row">
            <div class="col50">
                <h1 class="titleText">The Story behind us...</h1>
                <br>
                <p>Mangtataho began operation in the Philippines in the year 2020 after the famous virus spread across the country. IT-3C a group of programer missed taho the most in their childhoood time. They regularly experiment the taho delicacy and
                    took it to another level,
                    <br><br> Some people will pay just to taste their homemade taho flavor and this was what inspired IT-3C to open a cafe where the people could enjoy food and drinks, the cafe mostly served taho. As they produce more taho flavor, regular
                    customer have increased and all generation love.</p>
            </div>

            <div class="col50">
                <div class="imgbx">
                    <img src="./assets/taho1.png">
                </div>
            </div>

        </div>
    </section>

    <section class="founder">
        <div class="title">
            <h1 class="title-line"><br>Meet the Team</h1>

        </div>

        <div class="content">
            <div class="box">
                <div class="imgbx">
                    <img src="./assets/theTeam/raissa.jpg">
                </div>

                <div class="name">
                    <h3>Raissa Ortanez</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbx">
                    <img src="./assets/theTeam/eiyah.jpg">
                </div>

                <div class="name">
                    <h3>Eiyah Tusi</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbx">
                    <img src="./assets/theTeam/sam.jpg">
                </div>

                <div class="name">
                    <h3>Simon Manayon</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbx">
                    <img src="./assets/theTeam/rizzy.png">
                </div>

                <div class="name">
                    <h3>Rizzy Capati</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgbx">
                    <img src="./assets/theTeam/chris.jpg">
                </div>
                <div class="name">
                    <h3>Christian Jade Frias</h3>
                </div>
            </div>
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