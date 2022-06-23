<?php
if (!isset($_SESSION) && !headers_sent()) {
    session_start();
}
$root = '/BackendRouting';
include 'application/class/views/favoritePage.phtml';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/style-favorites.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Product</title>
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
            <form action="<?php echo $root ?>/products?method=search" method="post">
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

    <div class="middle">

        <div class="your-favorites">
            <h2>Your favorite list:</h2>
            <div id="your-favorites-products-div" class="your-favorites-products"></div>
        </div>
        <div id="recommended-div" class="recommended">

        </div>
    </div>

    <footer class="footer">
            <div class="icon">
                <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
            </div>
            <!-- Footer pages -->
            <div class="list-items-bottom">
                <a href="<?php echo $root ?>/terms">Terms</a>
                <a href="<?php echo $root ?>/blogs">Blogs</a>
                <a href="<?php echo $root ?>/about">About</a>
                <a href="<?php echo $root ?>/contact">Contact</a>
                <a href="<?php echo $root ?>/privacy">Privacy</a>
            </div>
    </footer>
    <script src="frontend/scripts/Favorites.js"></script>
</body>
</html>