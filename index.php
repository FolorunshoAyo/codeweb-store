<?php
require(__DIR__ . '/auth-library/resources.php');

// NUMBER FORMATTER
// $human_readable = new \NumberFormatter(
//   'en_US', 
//   \NumberFormatter::PADDING_POSITION
// );

$inSession = (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) || (isset($_SESSION['user_name']) && !empty($_SESSION['user_name']));

if ($inSession) {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Fonts (Inter) -->
    <link rel="stylesheet" href="assets/fonts/fonts.css">
    <!-- BASE CSS -->
    <link rel="stylesheet" href="assets/css/base.css">
    <!-- Slick plugin stylesheet -->
    <link rel="stylesheet" href="assets/css/slick/slick.css">
    <!-- CUSTOM SLIDER STYLING -->
    <link rel="stylesheet" href="assets/css/slider-theme.css" type="text/css">
    <!-- CUSTOM CSS (HOME) -->
    <link rel="stylesheet" href="assets/css/index.css" type="text/css">
    <!-- MEDIA QUERIES -->
    <link rel="stylesheet" href="assets/css/media-queries/main-media-queries.css">
    <title>Home - Codeweb store</title>
</head>

<body>
    <div class="cart-backdrop"></div>
    <aside class="cart-menu">
        <div class="close-container">
            <i class="fa fa-times"></i>
        </div>
        <div class="cart-menu-items-container">
            <div class="cart-menu-items">
                <div class="cart-menu-item">
                    <div class="cart-menu-item-image-container">
                        <img src="assets/images/web-cam-1.jpg" />
                    </div>
                    <div class="cart-product-details">
                        <a href="#" class="cart-product-name">Web cam 2.0</a>
                        <div class="cart-item-meta">
                            <span class="quantity">2</span> &times; <span class="price">N 300,000</span>
                        </div>
                    </div>
                    <div class="close-btn-container">
                        <button>
                            <i class="fa fa-cross"></i>
                        </button>
                    </div>
                </div>
                <div class="cart-menu-item">
                    <div class="cart-menu-item-image-container">
                        <img src="assets/images/web-cam-1.jpg" />
                    </div>
                    <div class="cart-product-details">
                        <a href="#" class="cart-product-name">Web cam 2.0</a>
                        <div class="cart-item-meta">
                            <span class="quantity">2</span> &times; <span class="price">N 300,000</span>
                        </div>
                    </div>
                    <div class="close-btn-container">
                        <button>
                            <i class="fa fa-cross"></i>
                        </button>
                    </div>
                </div>
                <div class="cart-menu-item">
                    <div class="cart-menu-item-image-container">
                        <img src="assets/images/web-cam-1.jpg" />
                    </div>
                    <div class="cart-product-details">
                        <a href="#" class="cart-product-name">Web cam 2.0</a>
                        <div class="cart-item-meta">
                            <span class="quantity">2</span> &times; <span class="price">N 300,000</span>
                        </div>
                    </div>
                    <div class="close-btn-container">
                        <button>
                            <i class="fa fa-cross"></i>
                        </button>
                    </div>
                </div>
                <div class="cart-menu-item">
                    <div class="cart-menu-item-image-container">
                        <img src="assets/images/web-cam-1.jpg" />
                    </div>
                    <div class="cart-product-details">
                        <a href="#" class="cart-product-name">Web cam 2.0</a>
                        <div class="cart-item-meta">
                            <span class="quantity">2</span> &times; <span class="price">N 300,000</span>
                        </div>
                    </div>
                    <div class="close-btn-container">
                        <button>
                            <i class="fa fa-cross"></i>
                        </button>
                    </div>
                </div>
                <div class="cart-menu-item">
                    <div class="cart-menu-item-image-container">
                        <img src="assets/images/web-cam-1.jpg" />
                    </div>
                    <div class="cart-product-details">
                        <a href="#" class="cart-product-name">Web cam 2.0</a>
                        <div class="cart-item-meta">
                            <span class="quantity">2</span> &times; <span class="price">N 300,000</span>
                        </div>
                    </div>
                    <div class="close-btn-container">
                        <button>
                            <i class="fa fa-cross"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="sub-total-container">
                Subtotal: <span class="subtotal-amount">N 300,000</span>
            </div>
            <div class="cart-menu-action-btns">
                <a href="../cart/" class="btn">View Cart</a>
                <a href="../checkout/" class="btn">Checkout</a>
            </div>
        </div>
    </aside>
    <header>
        <div class="top-header">
            <a href="index.html" class="logo-container">
                <div class="logo-image-container">
                    <img src="assets/images/logo.jpg" alt="Header Logo">
                </div>
                <div class="logo-text">
                    <span class="title">codeweb store</span>
                    <span>Pay half now - pay half later</span>
                </div>
            </a>

            <nav class="navigation-menu">
                <ul class="nav-links">
                    <li class="nav-link-item">
                        <a href="#">
                            <i class="fa fa-money"></i>
                            Purchases
                        </a>
                    </li>
                    <li class="nav-link-item">
                        <a href="#">
                            <i class="fa fa-rocket"></i>
                            Packages
                        </a>
                    </li>
                    <li class="nav-link-item">
                        <a href="#">
                            <i class="fa fa-info"></i>
                            Help
                        </a>
                    </li>
                    <li class="nav-link-item cart-link">
                        <a href="javascript:void(0)">
                            <span class="cart-badge">0</span>
                            <i class="fa fa-shopping-cart"></i>
                            Cart
                        </a>
                    </li>
                    <!-- <li class="nav-link-item">
                        <div class="dark-mode-container">
                            <span>Dark Mode</span>
                            <img src="assets/images/toggle-off.png" alt="toggle-off">
                        </div>
                    </li> -->
                </ul>
            </nav>
        </div>
        <div class="bottom-header">
            <div class="categories-btn-container">
                <button>Categories</button>
            </div>
            <div class="search-container">
                <form class="search-box" action="search/">
                    <input type="text" name="q" placeholder="Search for an item">
                    <button type="submit" class="search-icon-btn">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="other-links-container">
                <!-- <button class="installment-btn">Installments</button> -->
                <div class="menu-container">
                    <a href="javascript:void(0)"><i class="fa fa-user-o"></i> <?php echo ($inSession ?  explode(" ", $user_name)[0] : "Account") ?></a>
                    <?php
                    if (!$inSession) {
                    ?>
                        <ul class="menu">
                            <li><a href="login">Sign In</a></li>
                        </ul>
                    <?php
                    } else {
                    ?>
                        <ul class="menu">
                            <li><a href="user/">Dashboard</a></li>
                            <li><a href="user/orders">Orders</a></li>
                            <li><a href="logout?rd=home">Log out</a></li>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="categories-section">
            <div class="categories-container">
                <div class="categories-slider-container">
                    <div class="categories-slider">
                        <div class="product-desc product-category">
                            <div>
                                <span>Cars</span>
                                <img src="assets/images/corolla.jpg" alt="#">
                            </div>
                        </div>
                        <div class="product-desc product-category">
                            <div>
                                <span>Laptops</span>
                                <img src="assets/images/hp-15.jpg" alt="#">
                            </div>
                        </div>
                        <div class="product-desc product-category">
                            <div>
                                <span>Phones</span>
                                <img src="assets/images/iphone-13.jpg" alt="#">
                            </div>
                        </div>
                        <div class="product-desc product-category">
                            <div>
                                <span>Commercials</span>
                                <img src="assets/images/na-pep.jpg" alt="#">
                            </div>
                        </div>
                        <div class="product-desc product-category">
                            <div>
                                <span>Tvs & Monitors</span>
                                <img src="assets/images/alienware.jpg" alt="#">
                            </div>
                        </div>
                        <div class="product-desc product-category">
                            <div>
                                <span>Cameras</span>
                                <img src="assets/images/nikon-d90.jpg" alt="#">
                            </div>
                        </div>
                        <div class="product-desc product-category">
                            <div>
                                <span>Home Appliances</span>
                                <img src="assets/images/hisense-ac.jpg" alt="#">
                            </div>
                        </div>
                        <div class="product-desc product-category">
                            <div>
                                <span>Cameras</span>
                                <img src="assets/images/nikon-d90.jpg" alt="#">
                            </div>
                        </div>
                        <div class="product-desc product-category">
                            <div>
                                <span>Home Appliances</span>
                                <img src="assets/images/hisense-ac.jpg" alt="#">
                            </div>
                        </div>
                        <div class="product-desc product-category">
                            <div>
                                <span>Home Appliances</span>
                                <img src="assets/images/hisense-ac.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero-section">
            <div class="hero-container">
                <div class="hero-text-box">
                    The <br> <span>Smarter</span> way to spend and look <b>good doing it.</b>
                </div>
                <div class="hero-img-container">
                    <img src="assets/images/banner-main.png" alt="Male jollying with money in his hands">
                </div>
                <div class="hero-logo-container">
                    <img src="assets/images/logo.jpg" alt="Logo">
                </div>
            </div>
        </section>
        <section class="available-goods-section">
            <div class="available-goods-container">
                <div class="available-goods-text-box">
                    <h2 class="available-goods-title">Top deals</h2>
                    <p class="available-goods-text">According to in-demand purchases, get yours now!</p>
                </div>
                <div class="available-goods">
                    <?php
                    $recentProductsSql = $db->query("SELECT * FROM products ORDER BY product_id desc LIMIT 8");

                    while ($rowProduct = $recentProductsSql->fetch_assoc()) {
                        $interest_amount = (30 / 100) * $rowProduct['price'];
                        
                        $installment_price = $rowProduct['price'] + $interest_amount;

                        $calculatedPeriods = getDaysWeeks($rowProduct['duration_of_payment']);

                        $calculatedDays = $calculatedPeriods['days']; 
                        $calculatedWeeks = $calculatedPeriods['weeks'];
                        $calculatedMonths = $calculatedPeriods['months'];
                    ?>
                        <div class="available-good">
                            <?php
                            //    $product_name_bits = explode(" ", strtolower($rowProduct['name']));

                            //    $refinedProductName = join("-", $product_name_bits);
                            ?>
                            <a href="product/?pid=<?= $rowProduct['product_id'] ?>">
                                <figure>
                                    <img src="a/admin/images/<?php echo explode(",", $rowProduct['pictures'])[0] ?>" alt="web cam">
                                    <figcaption>
                                        <div class="payment-plans">
                                            <span class="product-badge daily">???<?php echo number_format(($installment_price / $calculatedDays), 2)?>/day</span>
                                            <span class="product-badge weekly">???<?php echo number_format(($installment_price / $calculatedWeeks), 2)?>/week</span>
                                            <span class="product-badge month">???<?php echo number_format(($installment_price / $calculatedMonths), 2)?>/month</span>
                                        </div>
                                        <span class="product-desc product-category-name"><?= $rowProduct['name'] ?></span>
                                        <span class="product-desc product-category-price">
                                            ??? <?php echo number_format($rowProduct['price'], 2) ?>
                                        </span>
                                    </figcaption>
                                </figure>
                            </a>
                            <div class="add-to-cart-btn">
                                <button>Add to Cart</button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="view-all-container">
                    <a href="./all-products/">view all</a>
                </div>
            </div>
        </section>
        <!-- <section class="services-section">
            <div class="services-container">
                <h1 class="services-title main-title">
                    Why save and spend with us?
                </h1>
                <div class="services-offered">
                    <div class="service left">
                        <h2 class="service-sub-title sub-title">
                            Easier living for the common man
                        </h2>
                        <p class="service-text">
                            With CDS, you get access to your favourite items, all in one place at very affordable
                            prices.
                        </p>
                    </div>
                    <div class="service right">
                        <h2 class="service-sub-title sub-title">
                            The best payment plans
                        </h2>
                        <p class="service-text">
                            As a customer of CDS, you get access to our affordable payment plans and you choose what is
                            irght for you and your pocket.
                        </p>
                    </div>
                    <div class="service left">
                        <h2 class="service-sub-title sub-title">
                            Guaranteed withdrawals
                        </h2>
                        <p class="service-text">
                            With our savings platforms, your savings are secured and timely withdrawal guaranteed.
                        </p>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="banner-section">
            <div class="banner-section-container">
                <div class="banner-img-container">
                    <img src="assets/images/banner.png" alt="Banner group">
                </div>
                <div class="banner-text-box-container">
                    <div class="banner-text-box">
                        <h2 class="text-box-title">
                            Buy now and pay later!!
                        </h2>
                        <p class="banner-text">
                            codeweb store is a marketplace that recognises the economic state and promises to
                            deliver you with what you need at the convenience of your pocket.
                        </p>
                        <div class="banner-btn-container">
                            <a href="#">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="circle"></div>
            </div>
        </section>
        <section class="top-categories-section">
            <div class="top-categories-container">
                <div class="top-categories-text-box">
                    <h2 class="top-categories-title">Top categories</h2>
                    <p class="top-categories-text">These are the hottest categories right now!!</p>
                </div>
                <div class="top-categories">
                    <a href="./all-products/?category=electronics" class="top-category">
                        <figure>
                            <img src="assets/images/bed-21.jpg" alt="#">
                            <figcaption>
                                Electronics
                            </figcaption>
                        </figure>
                    </a>
                    <a href="./all-products/?category=home-kitchen" class="top-category">
                        <figure>
                            <img src="assets/images/kitchen-interior.jpg" alt="#">
                            <figcaption>
                                Home and kitchen
                            </figcaption>
                        </figure>
                    </a>
                    <a href="./all-products/?category=phone-tablets" class="top-category">
                        <figure>
                            <img src="assets/images/modern-stationary-collection-arrangement.jpg" alt="#">
                            <figcaption>
                                Phones and tablet
                            </figcaption>
                        </figure>
                    </a>
                    <a href="./all-products/?category=computer-accessories" class="top-category">
                        <figure>
                            <img src="assets/images/bed-21.jpg" alt="#">
                            <figcaption>
                                Computers and accessories
                            </figcaption>
                        </figure>
                    </a>
                    <a href="./all-products/?category=furniture" class="top-category">
                        <figure>
                            <img src="assets/images/bed-21.jpg" alt="#">
                            <figcaption>
                                Furniture
                            </figcaption>
                        </figure>
                    </a>
                    <a href="./all-products/?category=groceries" class="top-category">
                        <figure>
                            <img src="assets/images/bed-21.jpg" alt="#">
                            <figcaption>
                                Groceries
                            </figcaption>
                        </figure>
                    </a>
                    <a href="./all-products/?category=fashion" class="top-category">
                        <figure>
                            <img src="assets/images/bed-21.jpg" alt="#">
                            <figcaption>
                                Fashion
                            </figcaption>
                        </figure>
                    </a>
                    <a href="./all-products/?category=health-beauty" class="top-category">
                        <figure>
                            <img src="assets/images/bed-21.jpg" alt="#">
                            <figcaption>
                                Health and Beauty
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </section>
        <section class="our-brands-section">
            <div class="our-brands-container">
                <div class="our-brands-text-box">
                    <h2 class="our-brands-title">Our Official Brands</h2>
                    <p class="our-brands-text">Here are our supported brands/dealers</p>
                </div>
                <div class="scroll-container">
                    <div class="scroll-element scroll-element-first">
                        <div class="scroll-image">
                            <img src="assets/images/bed-21.jpg" alt="">
                        </div>
                        <div class="scroll-image">
                            <img src="assets/images/bed-21.jpg" alt="">
                        </div>
                        <div class="scroll-image">
                            <img src="assets/images/bed-21.jpg" alt="">
                        </div>
                        <div class="scroll-image">
                            <img src="assets/images/bed-21.jpg" alt="">
                        </div>
                        <div class="scroll-image">
                            <img src="assets/images/bed-21.jpg" alt="">
                        </div>
                    </div>
                    <div class="scroll-element scroll-element-second">
                        <div class="scroll-image">
                            <img src="assets/images/bed-21.jpg" alt="">
                        </div>
                        <div class="scroll-image">
                            <img src="assets/images/bed-21.jpg" alt="">
                        </div>
                        <div class="scroll-image">
                            <img src="assets/images/bed-21.jpg" alt="">
                        </div>
                        <div class="scroll-image">
                            <img src="assets/images/bed-21.jpg" alt="">
                        </div>
                        <div class="scroll-image">
                            <img src="assets/images/bed-21.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-group-container">
                    <div class="footer-logo-container">
                        <div class="footer-logo-image-container">
                            <img src="assets/images/logo.jpg" alt="Footer logo">
                        </div>
                        <div class="footer-logo-text">
                            <span class="logo-title">CODEWEB STORE</span>
                            <span>Buy now pay later</span>
                        </div>
                    </div>
                    <p class="footer-message">
                        Codeweb project solutions was founded in 2019, since then we have continued to produce
                        reliable services in all sectors of production and consumption.
                    </p>
                </div>

                <div class="footer-group call-container">
                    <div class="call-center-container">
                        <div class="call-center-textbox">
                            <span class="call-center-text">Call Center</span>
                            <a href="tel:+2349045840662" class="call-center-no">+234 9045840662</a>
                        </div>
                        <div class="tel-icon-container">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <ul class="social-media-links">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright-message">
                <div>C</div>
                <span>Copyright Codeweb 2022</span>
            </div>
        </div>
    </footer>
    <!-- FONT AWESOME JIT SCRIPT-->
    <script src="https://kit.fontawesome.com/3ae896f9ec.js" crossorigin="anonymous"></script>
    <!-- JQUERY SCRIPT -->
    <script src="assets/js/jquery/jquery-3.6.min.js"></script>
    <!-- JQUERY MIGRATE SCRIPT (FOR OLDER JQUERY PACKAGES SUPPORT)-->
    <script src="assets/js/jquery/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/slick/slick.js"></script>
    <script>
        $(function() {
            // const burgerMenu = $(".burger-menu");
            // const mobileNav = $(".mobile-menu");

            $('.categories-slider').slick({
                dots: false,
                arrows: false,
                slidesToShow: 7,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    }
                ]
            });


            const menuContainer = document.querySelector(".menu-container a");
            menuContainer.addEventListener("click", toggle);

            const cartBtn = document.querySelector(".cart-link");
            const cartBackdrop = document.querySelector(".cart-backdrop");
            const cartMenu = document.querySelector(".cart-menu");
            const cartClose = document.querySelector(".close-container i");

            cartBtn.addEventListener("click", function() {
                cartMenu.classList.toggle("active");
                cartBackdrop.classList.toggle("active");
            });

            cartClose.addEventListener("click", function() {
                cartMenu.classList.toggle("active");
                cartBackdrop.classList.toggle("active");
            });

            cartBackdrop.addEventListener("click", function() {
                cartMenu.classList.toggle("active");
                cartBackdrop.classList.toggle("active");
            }, false);

            function toggle(e) {
                e.stopPropagation();
                var link = this;
                var menu = link.nextElementSibling;

                if (!menu) return;
                if (menu.style.display !== 'block') {
                    menu.style.display = 'block';
                } else {
                    menu.style.display = 'none';
                }
            };

            function closeAll() {
                menuContainer.nextElementSibling.style.display = 'none';
            };

            window.onclick = function(event) {
                closeAll.call(event.target);
            };

            // //CHANGING THE ARROW BUTTONS TO ARROWS
            // $(".slick-next").html("<i class='fas fa-arrow-right'></i>");
            // $(".slick-prev").html("<i class='fas fa-arrow-left'></i>");

            //HEADER STICKY FUNCTIONALITY
            // Jquery handler for displaying sticky header upon scroll.
            // $(window).on("scroll", () => {
            //     let header = $("header");

            //     header[0].classList.toggle("sticky", $(window)[0].scrollY > 180);
            // });

            // Event Handler for Burger Menu Toggle
            // burgerMenu.on("click", () => {
            //     burgerMenu.toggleClass("active");
            //     mobileNav.toggleClass("active");
            // });

            // SMOOTH SCROLL FUNCTIONALITY
            // Smooth scroll function declaration for handling smooth document fragmenting.
            // const smoothScroll = (buttonID, location, duration) => {
            //     $(buttonID).on("click", (e) => {
            //         $([document.documentElement, document.body]).animate({
            //             scrollTop: $(location).offset().top
            //         }, duration);
            //     })
            // };

            // smoothScroll(".collaborate-btn-container button", "#services", 3000)
        });
    </script>
</body>

</html>