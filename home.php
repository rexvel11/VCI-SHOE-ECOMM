<?php
// Connect to your database
@include 'db.php';

// Fetch all products from the database
$products_query = mysqli_query($conn, "SELECT * FROM shoe_tbl");
?><?php
// Connect to your database
@include 'db.php';

// Fetch all products from the database
$products_query = mysqli_query($conn, "SELECT * FROM shoe_tbl");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike - Just Do It</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section>
        <nav>
            <div class="logo">
                <h1>Vc<span>i</span></h1>
            </div>

            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#Products">Products</a></li>
                <li><a href="#About">About</a></li>
                
                <!-- Cart Icon in Navbar -->
<li><a href="javascript:void(0);" id="cart-icon"><i class="fa-solid fa-cart-shopping"></i> Cart</a></li>

<li><a href="logout.php" class="logout-btn">Logout</a></li>

<!-- Sidebar (Initially hidden) -->
<div id="cart-sidebar" class="cart-sidebar">
    <div class="sidebar-header">
        <h2>Your Cart</h2>
        <span id="close-cart" class="close-btn">&times;</span>
    </div>
    <div id="cart-items" class="cart-items">
        <!-- Cart items will appear here -->
    </div>
    <div class="sidebar-footer">
        <button id="checkout-btn">Checkout</button>
    </div>
</div>

            </ul>

        </nav>

        <div class="main" id="Home">
            <div class="main_content">
                <div class="main_text">
                    <h1>SHOE<br><span>Collection</span></h1>
                    <p>
                        Welcome to VCI Store, your go-to destination for stylish, comfortable, and affordable footwear!
                        As a locally owned small business, we take pride in offering a carefully curated collection of shoes for all occasions whether you're looking for everyday wear, special events, or outdoor adventures.
                        Our dedicated team is committed to providing personalized service and helping you find the perfect pair that suits your unique style and needs. <br> <br>Step into VCI Store today and experience exceptional quality and service with every step you take!</p>
                </div>
                <div class="main_image">
                    <img src="image/22-removebg-preview.png">
                </div>
            </div>
            <div class="button">
                <a href="#Products">SHOP NOW</a>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>

    </section>


    <!--Products-->

    <div class="products" id="Products">
        <h1>Products</h1>

        <div class="box">
            <div class="card">

                    <div class="small_card">
                        <i class="fa-solid fa-heart"></i>
                </div>

                <div class="image">
                    <img src="image/1-removebg-preview.png">
                </div>

                <div class="products_text">
                    <h2>Travis Scott Reverse Swosh</h2>
                    <p>
                        Ash Pink.
                    </p>
                    <h3>$100.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add To Cart</a>
                </div>

            </div>

            <div class="card">

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="image">
                    <img src="image/2-removebg-preview.png">
                </div>

                <div class="products_text">
                    <h2>Travis Scott Reverse Swosh</h2>
                    <p>
                        Mocha.
                    </p>
                    <h3>$200.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="btn">Add To Cart</a>
                </div>

            </div>

            <div class="card">

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="image">
                    <img src="image/3-removebg-preview.png">
                </div>

                <div class="products_text">
                    <h2>Travis Scott Reverse Swosh</h2>
                    <p>
                       Reverse Mocha.
                    </p>
                    <h3>$175.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add To Cart</a>
                </div>

            </div>

            <div class="card">

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="image">
                    <img src="image/6-removebg-preview.png">
                </div>

                <div class="products_text">
                    <h2>Dunk Low</h2>
                    <p>
                        Reverse Panda.
                    </p>
                    <h3>$120.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add To Cart</a>
                </div>

            </div>

            <div class="card">

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="image">
                    <img src="image/5-removebg-preview.png">
                </div>

                <div class="products_text">
                    <h2>Dunk Low</h2>
                    <p>
                        Midnight Blue.
                    </p>
                    <h3>$150.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add To Cart</a>
                </div>

            </div>

            <div class="card">

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="image">
                    <img src="image/7-removebg-preview.png">
                </div>

                <div class="products_text">
                    <h2>Dunk Low Special Edition</h2>
                    <p>
                        Dark Blue.
                    </p>
                    <h3>$220.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="btn">Add To Cart</a>
                </div>

            </div>

            <div class="card">

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="image">
                    <img src="image/4-removebg-preview.png">
                </div>

                <div class="products_text">
                    <h2>Travis Scott Reverse Swosh</h2>
                    <p>
                        Triple Black.
                    </p>
                    <h3>$110.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#" class="btn">Add To Cart</a>
                </div>

            </div>

            <div class="card">

                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="image">
                    <img src="image/8-removebg-preview.png">
                </div>

                <div class="products_text">
                    <h2>SB Dunks</h2>
                    <p>
                        Grey.
                    </p>
                    <h3>$150.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </div>
                    <a href="#" class="btn">Add To Cart</a>
                </div>

            </div>
            <!-- Start dynamic product cards -->
            <?php while ($product = mysqli_fetch_assoc($products_query)) { ?>
                <div class="card">
                    <div class="small_card">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <div class="image">
                        <img src="uploads/<?php echo htmlspecialchars($product['image']); ?>" alt="Product Image">
                    </div>
                    <div class="products_text">
                        <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                        <p><?php echo htmlspecialchars($product['color']); ?></p>
                        <h3>$<?php echo number_format($product['price'], 2); ?></h3>
                        <div class="products_star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <a href="#" class="btn">Add To Cart</a>
                    </div>
                </div>
            <?php } ?>
            <!-- End dynamic product cards -->      

        </div>
    </div>

    <!-- Ensure space between Products and About section -->
    <div style="clear: both;"></div> <!-- Clear floats -->  
    <div style="height: 1000px;"></div> <!-- Add a buffer space for separation -->

    <!--About-->

    <div class="about" id="About">
        
        <h1><span>About</span> VCI Shoe Store</h1>

        <div class="about_main">

            <div class="about_text">
                <p>
                    At VCI Shoe Store, we believe that everyone deserves a great pair of shoes to step into their day with confidence and comfort. As a small, locally owned business, we take pride in offering a curated selection of high-quality footwear for all occasions. Whether you’re looking for stylish sneakers, durable outdoor shoes, or everyday comfort, we have something for everyone. Our commitment to personalized service means that you’re not just buying shoes, you’re finding the perfect pair that suits your style and needs. Join us at VCI Shoe Store and experience exceptional quality, care, and value in every step you take.
                </p>
            </div>

        </div>

        

        <script>
            function functio(small){
                var full = document.getElementById("imagebox")
                full.src = small.src
            }
        </script>
        
    </div>


    <!--Login Form-->
    
    <div class="login_form">
        <div class="left">
            <img src="image/logshoes.png">
        </div>

        <div class="right">
           
        </div>

    </div>



    <!--Footer-->

    <footer>
        <div class="footer_main">
            <div class="tag">
                <h1>Contact</h1>
                <a href="#"><i class="fa-solid fa-house"></i>Location niyo</a>
                <a href="#"><i class="fa-solid fa-phone"></i>number keneme</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>email@gmail.com</a>
            </div>

            <div class="tag">
                <h1>Our Stores</h1>
                <a href="#" class="center">Irosin</a>
                <a href="#" class="center">Bulan</a>
            </div>

            <div class="tag">
                <h1>Follw Us</h1>
                <div class="social_link">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>   
                </div>
            </div>

        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>