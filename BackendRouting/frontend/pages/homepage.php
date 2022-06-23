<?php
if (!isset($_SESSION) && !headers_sent()) {
    session_start();
}
$root = '/BackendRouting';
?>
<!-- TODO RESPONSIVE  -->

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/style-homepage.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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

    <!-- Scroll to top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <!-- Page Container -->
    <div class="page-container">
        <div class="menu">
            <!-- Category Menu -->
            <div class="category-menu">
                <ul>
                    <li><a href="#carbonated">Carbonated Drinks</a></li>
                    <li><a href="#coffee">Coffee Drinks</a></li>
                    <li><a href="#dairy">Dairy Drinks</a></li>
                    <li><a href="#energy">Energy Drinks</a></li>
                    <li><a href="#hot">Hot Beverages</a></li>
                    <li><a href="#iced">Iced Teas</a></li>
                    <li><a href="#nonalc">Non Alcoholic</a></li>
                    <li><a href="#plant">Plant Based Drinks</a></li>
                    <li><a href="#water">Water</a></li>
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
        <div id="carbonated" class="category">
            <h2 style="border-bottom: 2px solid black">Carbonated Drinks</h2>
            <div class="shop-list">
                <!-- TODO Modificat sa se ia informatia din baza de date -->
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>

                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>

                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div id="coffee" class="category">
            <h2 style="border-bottom: 2px solid black">Coffee Drinks</h2>
            <div class="shop-list">
                <!-- TODO Modificat sa se ia informatia din baza de date -->
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div id="dairy" class="category">
            <h2 style="border-bottom: 2px solid black">Dairy Drinks</h2>
            <div class="shop-list">
                <!-- TODO Modificat sa se ia informatia din baza de date -->
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div id="energy" class="category">
            <h2 style="border-bottom: 2px solid black">Energy Drinks</h2>
            <div class="shop-list">
                <!-- TODO Modificat sa se ia informatia din baza de date -->
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div id="hot" class="category">
            <h2 style="border-bottom: 2px solid black">Hot Beverages</h2>
            <div class="shop-list">
                <!-- TODO Modificat sa se ia informatia din baza de date -->
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div id="iced" class="category">
            <h2 style="border-bottom: 2px solid black">Iced Teas</h2>
            <div class="shop-list">
                <!-- TODO Modificat sa se ia informatia din baza de date -->
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div id="nonalc" class="category">
            <h2 style="border-bottom: 2px solid black">Non Alcoholic</h2>
            <div class="shop-list">
                <!-- TODO Modificat sa se ia informatia din baza de date -->
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div id="plant" class="category">
            <h2 style="border-bottom: 2px solid black">Plant Based Drinks</h2>
            <div class="shop-list">
                <!-- TODO Modificat sa se ia informatia din baza de date -->
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div id="water" class="category">
            <h2 style="border-bottom: 2px solid black">Water</h2>
            <div class="shop-list">
                <!-- TODO Modificat sa se ia informatia din baza de date -->
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
                <div class="product-cell">
                    <img class="image-product" src="frontend/images/product/Sprite.png" alt="product">
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">Product</p>
                        </div>
                        <!--
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="icon">
            <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <div class="list-items-bottom">
            <a href="frontend/footer-pages/terms.html">Terms</a>
            <a href="frontend/footer-pages/blogs.html">Blogs</a>
            <a href="frontend/footer-pages/about.html">About</a>
            <a href="frontend/footer-pages/contact.html">Contact</a>
            <a href="frontend/footer-pages/privacy.html">Privacy</a>
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
</body>
</html>
