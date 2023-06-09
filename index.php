<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MangTataho!</title>

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
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="menu.php">Products</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
        </ul>
    </header>

    <!--PANEL 1: BANNER-->
    <section class="home" id="home">
        <div class="text-box">
            <h1>We cannot<br>deny that<br>we all love Taho</h1>
            <hr class="red-line">

            <h4>Every Filipino, no matter what their age,<br> they can't resist its taste and aroma</h4>
        </div>
        <div class="mangtataho-mascot-icon">
            <img src="./assets/home-icon-image-taho(1).png" alt="MangTataho Cutest Icon">
        </div>
    </section>

    <!--PANEL 2: FACTS-->
    <section class="facts">
        <h1 class="title">Some Facts About Taho</h1>
        <p>Here are some quick facts about Taho</p>
        <div class="container">
            <div class="box">
                <div class="icon">01</div>
                <div class="content">
                    <p>The very word “taho” comes from the Malay “tauhue,” which was derived from the Hokkien “tau hua,” or “tofu pudding”.</p>
                </div>
            </div>
            <div class="box">
                <div class="icon">02</div>
                <div class="content">
                    <p>Taho is made from soybean curds or fresh silk/soften tofu. It contains no cholesterol and is an excellent source of iron and calcium. It is also naturally gluten-free and low in calories.</p>
                </div>
            </div>
            <div class="box">
                <div class="icon">03</div>
                <div class="content">
                    <p>Taho Vendors on the Road selling taho are staples in the Philippines. You can catch them most mornings carrying their Taho containers around public places here in the Philippines.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Brief Description -->
    <!--
    <section class="mangtataho-description">
        <h1>Facts about Taho</h1>
        <p>Here are some quick facts about Taho</p>

        <div class="row">
            <div class="brief-description-col">
                <h3>Facts #1</h3>
                <p>The very word “taho” comes from the Malay “tauhue,” which was derived from the Hokkien “tau hua,” or “tofu pudding”.</p>
            </div>
            <div class="brief-description-col">
                <h3>Facts #2</h3>
                <p>Taho is made from soybean curds or fresh silk/soften tofu. It contains no cholesterol and is an excellent source of iron and calcium. It is also naturally gluten-free and low in calories.</p>
            </div>
            <div class="brief-description-col">
                <h3>Facts #3</h3>
                <p>Taho Vendors on the Road selling taho are staples in the Philippines. You can catch them most mornings carrying their Taho containers around public places here in the Philippines.</p>
            </div>
        </div>
    </section>
    -->

    <hr class="red-line-divider">
    <!-- a line divider-->

    <section class="home-menu">
        <h1>Three Best Flavors of Taho</h1>
        <p>Check out our best-selling Taho flavors!</p>
        <div class="container">
            <div class="box">
                <div class="imgbx">
                    <img src="assets/original-taho1.png" width="300px" height="400px">
                    <div class="layer" id="original-taho">
                        <h3><b>CLASSIC</b></h3>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgbx">
                    <img src="assets/strawberry-taho-1.png" width="300px" height="400px">
                    <div class="layer" id="strawberry-taho">
                        <h3><b>STRAWBERRY</b></h3>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgbx">
                    <img src="assets/ube-taho-1.png" width="300px" height="400px">
                    <div class="layer" id="ube-taho">
                        <h3><b>TARO</b></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Glimpse of best flavors of Taho -->

    <!-- <section class="menu-item">
        <br>
        <h1>Three Best Flavors of Taho</h1>
        <p>Here are our bestsellers to check out</p>

        <div class="row">
            <div class="menu-item-col">
                <img src="assets/ube-taho-1.png">
                <div class="layer" id="ube-taho">
                    <h3>Ube</h3>
                </div>
            </div>
            <div class="menu-item-col">
                <img src="assets/original-taho1.png">
                <div class="layer" id="original-taho">
                    <h3>Classic - Original</h3>
                </div>
            </div>
            <div class="menu-item-col">
                <img src="assets/strawberry-taho-1.png">
                <div class="layer" id="strawberry-taho">
                    <h3>Strawberry</h3>
                </div>
            </div>
        </div>
    </section> -->


    <hr class="red-line-divider">
    <!-- a line divider-->


    <!-- Products -->

    <section class="home-products">
        <h1>Our New Products</h1>
        <p>Here are some of our new products that we currently offer</p>

        <div class="content">
            <div class="card">
                <div class="imgbx">
                    <img src="./assets/no-bake-taho-cheesecake-1.png">
                </div>
                <div class="text">
                    <h3>Taho Cheesecake</h3>
                    <p>Your favorite New York Cheesecake topped with melted brown sugar and Sago pearls to meet classic Taho taste.</p>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="./assets/taho-icecream-1.png">
                </div>
                <div class="text">
                    <h3>Taho IceCream</h3>
                    <p>A soy-based ice cream that has perfectly drizzle with syrup and chewy sago pearls.</p>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="./assets/taho-milktea-1.png">
                </div>
                <div class="text">
                    <h3>Taho flavored Milktea</h3>
                    <p>Taho Milk Tea is a combination of everyone's favorite tasty & refreshing drink. It is a combination of Milk Tea with a touch of our famous Taho.</p>
                </div>
            </div>
        </div>
        <div class="button">
            <a href="menu.php" class="btn"><span>View All</span>
            </a>
        </div>

    </section>

    <br>
    <hr class="red-line-divider">
    <!-- a line divider-->


    <!--  Reviews -->

    <section class="customers-review">
        <h1>What our viewers says</h1>
        <p>Be sure to check out the reviews below</p>

        <div class="content">

            <div class="box">
                <img src="assets/no-image-icon.jpg">
                <div class="text">
                    <p>"Great for sharing with family and friends. It also keeps well in the ref for a few days. Awesome service and talking with the owner too inside the store."</p>
                    <h3>Althea Santos</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>

            <div class="box">
                <img src="assets/no-image-icon.jpg">
                <div class="text">
                    <p>"Really good quality taho. Always fresh. Have tried from other taho sellers but Mang Tataho has the best quality. Their arnibal is so good!"</p>
                    <h3>Gabriel Dela Cruz</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="assets/no-image-icon.jpg">
                <div class="text">
                    <p>"I missed taho, I have not tasted it for years. Thank you so much for making it available in your stores. I recommend this delicious comfort food from Mang Tataho."</p>
                    <h3>Paul Bernardino</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
            </div>

        </div>
    </section>

    <hr class="red-line-divider">

    <!-- Call to Action/Contact Us -->

    <section class="taho-short-clip">
        <h1>Want to know more and make<br>a food inspired by Taho?<br>Let us help and guide you.</h1>

        <button class="learn-more-button"><span><a href="contact.php" class="hero-btn">Reach us</a></span>
        </button>



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
            <!--<a href="mailto:mangtataho@gmail.com"><i class="fa-solid fa-envelope"></i></a>-->
        </div>

        <p>Made with <i class="far fa-heart"></i> by MangTataho IT Group. 2022.<br>Some Images and Product Ideas are from SoyBueno.</p>
    </footer>

    <!-- JavaScript for toggle Menu -->

    <script src="./js/script.js"></script>

</body>

</html>