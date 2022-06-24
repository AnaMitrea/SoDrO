<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $root = '/BackendRouting';
    include 'application/class/views/trending.phtml';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/style-trending.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly%20Lodger' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Trending</title>
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

    <div class="body-title">
        <div class="title-icon">
            <h1>Trending Products</h1>
            <span class="iconify" data-icon="el:fire"></span>
        </div>
    </div>
    <br>
    <div class="middle">
        <div class="carbonated">
            <div class="carbonated-text">
                <h2>Top Unsweetened Drinks</h2>
            </div>
            <div id="carbonated-list-1" class="carbonated-list">
            </div>
        </div>
        <div class="carbonated">
            <div class="carbonated-text">
                <h2>Top Artificially Sweetened Drinks</h2>
            </div>
            <div id="carbonated-list-2" class="carbonated-list">
            </div>
        </div>
        <div class="carbonated">
            <div class="carbonated-text">
                <h2>Top Milk and Dairy Drinks</h2>
            </div>
            <div id="carbonated-list-3" class="carbonated-list">
            </div>
        </div>
        <div class="carbonated">
            <div class="carbonated-text">
                <h2>Top Teas Drinks</h2>
            </div>
            <div id="carbonated-list-4" class="carbonated-list">
            </div>
        </div>
        <div class="carbonated">
            <div class="carbonated-text">
                <h2>Top Milk and Yogurt Drinks</h2>
            </div>
            <div id="carbonated-list-5" class="carbonated-list">
            </div>
        </div>


    </div>
    <footer class="footer">
        <div class="icon">
            <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <div class="list-items-bottom">
            <a href="<?php echo $root ?>/about">About</a>
            <a href="<?php echo $root ?>/contact">Contact</a>
        </div>
    </footer>
    <script src="frontend/scripts/Trending.js"></script>
</body>
</html>