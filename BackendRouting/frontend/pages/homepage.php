<?php
    $root = '/BackendRouting';
    include 'application/class/views/trending.phtml';
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="frontend/images/favicon.svg" />
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/style-homepage.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Homepage</title>
</head>
<body>
    <!-- Top Bar Row -->
    <div class="top-bar">
        <div class="icon">
            <span id="icon" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <div id="page-title">
            <a href="<?php echo $root ?>/home">SoftDrinks</a>
        </div>
        <!-- Responsive top bar  -->
        <div class="shop-list-icon">
            <span class="iconify" data-icon="bx:list-ul"></span>
            <div class="list-items-responsive">
                <a href="<?php echo $root ?>/trending">Trending</a>
                <a href="<?php echo $root ?>/products">Products</a>
                <a href="<?php echo $root ?>/recipes">Recipes</a>
                <a href="<?php echo $root ?>/favorites">Favorites</a>
            </div>
        </div>
        <!-- Actual top bar buttons -->
        <div class="list-items">
            <a href="<?php echo $root ?>/trending">Trending</a>
            <a href="<?php echo $root ?>/products">Products</a>
            <a href="<?php echo $root ?>/recipes">Recipes</a>
            <a href="<?php echo $root ?>/favorites">Favorites</a>
        </div>
        <!-- Top-bar - Search Bar -->
        <div class="search-container">
            <form method="post" action="shop-page-after-sort.php">
                <input type="text" name="search" placeholder="Search...">
                <input type="submit" name="submit-from-search-bar">
            </form>
        </div>
        <!-- User Icon Button -->
        <div class="user-icon">
            <a href="<?php echo $root ?>/profile">
                <span id="user-iconify" class="iconify" data-icon="iconoir:profile-circled"></span>
            </a>
        </div>
    </div>

    <!-- Scroll to top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <!-- Page Container -->
    <div class="page-container">
        <div class="menu">
            <!-- Category Menu -->
            <div class="category-menu">
                <ul>
                    <li><a href="#div-1">Unsweetened Drinks</a></li>
                    <li><a href="#div-2">Artificially Sweetened Drinks</a></li>
                    <li><a href="#div-3">Milk and Dairy</a></li>
                    <li><a href="#div-4">Teas</a></li>
                    <li><a href="#div-5">Milk and Yogurt</a></li>
                </ul>
            </div>
            <!-- Image Slider -->
            <div class="photo-slider">
                <img class="mySlides" src="frontend/images/slider/coca-cola.jpg" alt="Coca Cola">
                <img class="mySlides" src="frontend/images/slider/fanta.jpg" alt="Fanta">
                <img class="mySlides" src="frontend/images/slider/pepsi.jpg" alt="Pepsi">
            </div>
        </div>
        <!-- Category divs -->
        <div id="div-1" class="category">
            <h2>Unsweetened Drinks</h2>
            <div id="carbonated-list-1" class="shop-list">
            </div>
        </div>
        <div id="div-2"class="category">
            <h2>Artificially Sweetened Drinks</h2>
            <div id="carbonated-list-2" class="shop-list">
            </div>
        </div>
        <div id="div-3" class="category">
            <h2>Milk and Dairy</h2>
            <div id="carbonated-list-3" class="shop-list">
            </div>
        </div>
        <div id="div-4" class="category">
            <h2>Teas</h2>
            <div id="carbonated-list-4" class="shop-list">
            </div>
        </div>
        <div id="div-5" class="category">
            <h2>Milk and Yogurt</h2>
            <div id="carbonated-list-5" class="shop-list">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="icon">
            <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <div class="list-items-bottom">
            <a href="<?php echo $root ?>/about">About</a>
            <a href="<?php echo $root ?>/contact">Contact</a>
        </div>
    </footer>
    <!-- Scripts  -->
    <!-- Smooth scroll -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    <!-- Scroll Up Button Script -->
    <script src="frontend/scripts/scrollUp.js"></script>
    <!-- Icon Script  -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <!-- Image Automatic Slider Script -->
    <script src="frontend/scripts/imageSlider.js"></script>
    <script src="frontend/scripts/Trending.js"></script>
</body>
</html>
