<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>Ecommerce Website</title>
</head>
<body>
    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/ibanez1.png" width="125px" ></a>
            </div>
    
            <nav>
                <ul id="MenuItems">
                    <li> <a href="index.php">Home</a></li>
                    <li> <a href="product.php">Product</a></li>
                    <li> <a href="">About</a></li>
                    <li> <a href="">Contact</a></li>
                    <li> <a href="register.php">Account</a></li>
                    
                </ul>
            </nav>
            
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Give Your Fashion <br> A New Style!</h1>
                <p>Success isn't always about greatness. It's about consistency.
                    Consistent <br> hard work gains success. 
                    Greatness will come</p>
                    <a href="" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/ibanez2.png">
            </div>
        </div>
    </div>
</div>

<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="images/category-1.jpg" >
            </div>
            <div class="col-3">
                <img src="images/category-2.jpg" >
            </div>
            <div class="col-3">
                <img src="images/category-3.jpg" >
            </div>
        </div>
    </div>
    
</div>

<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <a href="productdetails.php"><img src="images/product-1.jpg" ></a>
            <a href="productdetails.php"></a><h4>Red Printed T-shirt</h4></a>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-2.jpg" >
            <h4>Black Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$30.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-3.jpg" >
            <h4>Grey Sports Track</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$40.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-4.jpg" >
            <h4>Black T-shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$20.00</p>
        </div>
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="images/product-5.jpg" >
            <h4>Grey Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$100.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-6.jpg" >
            <h4>Black Printed T-shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-7.jpg" >
            <h4>Socks</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$15.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-8.jpg" >
            <h4>Fossil Watch</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$75.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-9.jpg" >
            <h4>Analog Watch</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$70.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-10.jpg" >
            <h4>Puma Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$130.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-11.jpg" >
            <h4>Shoes</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$60.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-12.jpg" >
            <h4>Black Joggers</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$65.00</p>
        </div>
    </div>
</div>

<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/exclusive.png" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusively Available on Ibanez</p>
                <h1>Smart Band 4</h1>
                <small>The Mi Smart Band 4 features a 39.9% larger
                    (than Mi Band 3) AMOLED color full-torch display with 
                    adjustable brightness, so everything is clear as can be.
                </small>
                <a href="" class="btn-1">&#8592; Get Now </a>
            </div>
            
        </div>
    </div>
</div>

<!------------ testimonial ---------->

<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-1.png" >
                    <h3>Sean Parker</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum is simply dummy text of the printing
                    and typesetting industry.Lorem Ipsum has been the
                    industry's standard dummy text ever.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-2.png" >
                    <h3>Kelly Sine</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="images/user-3.png" >
                    <h3>Micheal Pichu</h3>
            </div>
        </div>
    </div>
</div>

<!---------brands------------>
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png" >
            </div>
            <div class="col-5">
                <img src="images/logo-oppo.png" >
            </div>
            <div class="col-5">
                <img src="images/logo-coca-cola.png" >
            </div>
            <div class="col-5">
                <img src="images/logo-paypal.png" >
            </div>
            <div class="col-5">
                <img src="images/logo-philips.png" >
            </div>
        </div>
    </div>
</div>

<!----------------footer---------->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and IOS mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png" >
                    <img src="images/app-store.png" >
                </div>
            </div>
            <div class="footer-col-2">
               <img src="images/ibanez1.png" >
                <p>Our Purpose Is To Sustainably Make the Pleasure and 
                    Benefits of Sports Accessible to the Many.
                </p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>

                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>

                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2021 - Nilaman Rajbhandari</p>
    </div>
</div>
<script>
    var MenuItems = document.getElementByID("MenuItems");

    MenuItems.style.maxHeight ="0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight ="0px")
        {
            MenuItems.style.maxHeight ="200px";
        }
        else{
            MenuItems.style.maxHeight ="0px";
        }
    }
</script>
</body>
</html>