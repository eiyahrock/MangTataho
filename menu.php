<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MangTataho Menu</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/button-red.css">
    <link rel="stylesheet" href="css/misc.css">

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
            <li><a class="active" href="menu.php">Products</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <!-- <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li> -->
            <?php
            if(!empty($_SESSION["shopping_cart"])) {
            $cart_count = count(array_keys($_SESSION["shopping_cart"]));
            ?>
            <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"><?php echo $cart_count; ?></i></a></li>
            <?php
            }
            ?>

            <!-- <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li> -->
        </ul>
        
    </header>

    <section class="sub-header-menu">
        <div class="text-title">
            <h1>Our Products</h1>
        </div>
    </section>



    <!-- New Products -->
    <section class="new-taho-products" id="#newProducts">

    </section>


    <!-- Different flavors of Taho -->

    <section class="taho-flavors">
        <div class="title">
            <h1 class="title-line"><br>Try our different spe<span>cial flavors of Taho</span></h1>
            <hr class="red-line-divider">
        </div>
        <br>
        <div class="content">
            <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/original-taho1.png" alt="Classic/Original Taho">
                </div>
                <div class="text">
                    <h3>Classic</h3>
                    <p>Our most famous classic Taho. Made with Fresh Soybeans, our classic taho can be eaten any time of the day and can be served Hot or Cold in your own liking.</p>
                    <br>
                </div>
            </div>
            <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/strawberry-taho-1.png" alt="Strawberry Taho">
                </div>
                <div class="text">
                    <br>
                    <h3>Strawberry</h3>
                    <p>From Benguet to Manila, fresh-picked strawberries are carefully pureed to taste the authenticity of each flavor of strawberry.</p>
                    <br>
                    <br>
                </div>
            </div>
            <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/ube-taho-1.png" alt="Taro Taho">
                </div>
                <div class="text">
                    <br>
                    <h3>Taro</h3>
                    <p>With its earthy and slightly nutty taste, each slurp of your taho will bring you back to your favorite provinces.</p>
                    <br>
                    <br>
                </div>
            </div>
        </div>

        <div class="title">
            <h1 class="title-line">Products</h1>
            <hr class="red-line-divider">
        </div>
        

        <div class="content">
        <?php
        $result = mysqli_query($con,"SELECT * FROM `products`");
        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='box'>
            <form method='post' action=''>
            <input type='hidden' name='code' value=".$row['code']." />
            <div class='imagebx'><img class='' src='".$row['image']."'width='400' height='300' /></div>
            <div class='text'>".$row['name']." ₱ ".$row['price']." </div>
            <div class='btn'><button type='submit' class='button-red'>Add To Cart</button></div>
            </form>
            </div>";
                }
        mysqli_close($con);
        ?>

            <div style="clear:both;"></div>

            <div class="message_box" style="margin:10px 0px;">
            <?php echo $status; ?>
            </div>
       
        
            <!--PROD1-->

            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/productsContent/p-image-1.png">
                </div>
               
                <div class="text">
                    <br>
                    <br>
                    <h3>Chilled Taho</h3>
                    <p>Our Most Famous Chilled Taho with Sago and Arnibal ready for you to indulge.</p>
                    <br>
                    <br>
                    <br>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->


            <!--PROD2-->
            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/no-bake-taho-cheesecake-1.png">
                </div>
                
                <div class="text">
                    <br>
                    <h3>Taho Cheesecake</h3>
                    <p>Your favorite New York Cheesecake topped with Arnibal and Sago for that classic Taho taste.</p>
                    <br>
                    <br>
                    <br>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->

            <!--PROD3-->
            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/productsContent/p-image-2.png">
                </div>
                <div class="text">
                    <h3>Premium SoyMilk Matcha/Choco Flavor</h3>
                    <p>Crafted by the finest Soybeans, you have the option to taste a slice of Japan or to enjoy a sweet chocolate drink with the Matcha or Chocolate option.</p>
                    <br>
                    <br>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->

            <!--PROD4-->
            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/taho-icecream-1.png">
                </div>

                <div class="text">
                    <br>
                    <h3>Taho IceCream</h3>
                    <p>A Soy-based Ice cream that has been topped with perfectly chewy Sago and a drizzle with Arnibal.</p>
                    <br>
                    <br>
                    <br>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->

            <!--PROD5-->
            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/taho-milktea-1.png">
                </div>

                <div class="text">
                    <h3>Taho Flavored Milktea</h3>
                    <p>Taho Milk Tea is a combination of everyone's favorite morning dessert and everyone's favorite afternoon drink. Half of our famous Taho with Arnibal and Sago and half of our own Milk Tea concoction..</p>
                    <br>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->

            <!--PROD6-->
            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/productsContent/p-image-3.png">
                </div>

                <div class="text">
                    <br>
                    <h3>Premium SoyMilk</h3>
                    <p>Freshly bought High-quality soybeans are soaked and ground to perfection for the best tasting sweetened soymilk.</p>
                    <br>
                    <br>
                    <br>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->

            <!--PROD7-->
            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/productsContent/p-image-4.png">
                </div>

                <div class="text">
                    <br>
                    <h3>SoyMilk</h3>
                    <p>From the finest soybeans in the Philippines, a drink that can be available to all with the Unsweetened Soymilk.</p>
                    <br>
                    <br>
                    <br>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->

            <!--PROD8-->
            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/productsContent/p-image-5.png">
                </div>

                <div class="text">
                    <br>
                    <h3>Taho</h3>
                    <p>You want to try a different approach with your Taho? Simply buy the Original taho.</p>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->

            <!--PROD9-->
            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/productsContent/p-image-6.png">
                </div>
                <div class="text">
                    <br>
                    <h3>Tofu</h3>
                    <p>This plant-based product can be a great meat-alternative for your daily intake of protein.</p>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->

            <!--PROD10-->
            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/productsContent/p-image-7.png">
                </div>

                <div class="text">
                    <br>
                    <br>
                    <h3>Add-ons</h3>
                    <p>Craving for that sweet Arnibal and that amazing Sago, go satisfy your sweet tooth with thesd add-ons</p>
                    <br>
                    <br>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->

            <!--PROD11-->
            <!-- <div class="box">
                <div class="imgbx">
                    <img class="image" src="./assets/productsContent/p-image-8.png">
                </div>

                <div class="text">
                    <h3>Mangtataho Bundle</h3>
                    <p>Love all of our Products? We offer a bundle for all so that you can experience everything again with a simple transaction in a reasonable price. Comes with a 2 Premium Soymilk(Matcha, Choco, or Plain) and Chilled Taho.</p>
                <BR>
                </div>

                <div class="btn">
                    <button class="button-red">Add to cart</button>
                    <a href="" class="heart"><i class="fa-solid fa-heart"></i></a>
                </div>
            </div> -->

        </div>
    </section>

    <!--
        <div class="box-container">
            <div class="box">
                <img class="image" src="./assets/productsContent/p-image-1.png" alt="Classic/Original Taho">
                <div class="content-title">

                    <h3>Classic</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="./assets/productsContent/p-image-2.png" alt="Strawberry Taho">
                <div class="content-title">

                    <h3>Strawberry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

            <div class="box">
                <img class="image" src="./assets/productsContent/p-image-3.png" alt="Chocolate Taho">
                <div class="content-title">

                    <h3>Chocolate</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

            <div class="box">
                <img class="image" src="./assets/productsContent/p-image-4.png" alt="Coffee flavored Taho">
                <div class="content-title">

                    <h3>Coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

            <div class="box">
                <img class="image" src="./assets/productsContent/p-image-5.png" alt="Mango Taho">
                <div class="content-title">

                    <h3>Mango</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

            <div class="box">
                <img class="image" src="./assets/productsContent/p-image-6.png" alt="Melon Taho">
                <div class="content-title">

                    <h3>Melon</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

            <div class="box">
                <img class="image" src="./assets/productsContent/p-image-7.png" alt="Avocado Taho">
                <div class="content-title">

                    <h3>Avocado</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

            <div class="box">
                <img class="image" src="./assets/productsContent/p-image-8.png" alt="Taro flavored Taho">
                <div class="content-title">

                    <h3>Taro</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

            <div class="box">
                <img class="image" src="./assets/productsContent/p-image-8.png" alt="Matcha Taho">
                <div class="content-title">

                    <h3>Matcha</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
        </div>
-->




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