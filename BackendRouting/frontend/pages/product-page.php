<?php
if(!isset($_SESSION)) {
    session_start();
}
$root = '/BackendRouting';
include 'application/class/views/productPage.phtml';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/style-product-page.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Single Product</title>
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

<div class="middle">

    <div class="top-middle">
        <div class="swiper">

            <!-- Products Container - contents added from javascript -->
            <h1 id="product-title-in-product-page" ></h1>

            <div class="images">
                <div class="main-photo">
                    <img id="product-image-in-product-page" class="prod-img" src="" alt="photo">
                </div>
            </div>
        </div>

        <div class="details">

            <div class="ingredients-list">
                <h2>NUTRITIONAL VALUES</h2>
                    <h4 id="nutrition-data-per"></h4>
                <table id="ingredients-val">
                    <tr>
                        <th>Nutrition value</th>
                        <th>Quantity/Value</th>
                    </tr>
                </table>
            </div>

            <div id="additional-data-div" class="additional-data">
                <h2>DETAILS</h2>
            </div>

        </div>
    </div>

    <div id="bottom-middle-div" class="bottom-middle"></div>

    <!-- Product Recommandation-->

    <div class="other-products-from-same-categories">
        <h2>We Recommend:</h2>
        <div id="list-of-similar-products" class="list-of"></div>

    </div>

</div>


    <footer class="footer">
        <div class="icon">
            <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <!-- Footer pages -->
        <div class="list-items-bottom">
            <a href="<?php echo $root ?>/about">About</a>
            <a href="<?php echo $root ?>/contact">Contact</a>
        </div>
    </footer>
    <script src="frontend/scripts/Product.js"></script>
</body>
</html>