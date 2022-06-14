<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.svg" />
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/style-homepage.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="top-bar">
    <div class="icon">
        <span id="icon" class="iconify" data-icon="ep:cold-drink"></span>
    </div>
    <div id="page-title">
        <p>SoftDrinks</p>
    </div>

    <!-- Responsive top bar  -->
    <!-- TODO modificare la href -->
    <div class="shop-list-icon">
        <span class="iconify" data-icon="bx:list-ul"></span>
        <div class="list-items-responsive">
            <a href="frontend/pages/trending.html">Trending</a>
            <a href="frontend/pages/shop-page.html">Products</a>
            <a href="frontend/pages/recipes/recipe1.html">Recipes</a>
            <a href="#">Favorites</a>
        </div>
    </div>
    <div class="list-items">
        <a href="frontend/pages/trending.html">Trending</a>
        <a href="frontend/pages/shop-page.html">Products</a>
        <a href="frontend/pages/recipes/recipe1.html">Recipes</a>
        <a href="#">Favorites</a>
    </div>
    <div class="search-container">
        <form>
            <input type="search" placeholder="Search...">
        </form>
    </div>
    <div class="user-icon">
        <a href="/BackendRouting/profile">
            <span id="user-iconify" class="iconify" data-icon="iconoir:profile-circled"></span>
        </a>
    </div>
</div>

<div class="page-container">
    <div class="menu">
        <!-- Category Menu -->
        <div class="category-menu">
            <ul>
                <li><a href="#">Carbonated Drinks</a></li>
                <li><a href="#">Coffee Drinks</a></li>
                <li><a href="#">Dairy Drinks</a></li>
                <li><a href="#">Energy Drinks</a></li>
                <li><a href="#">Hot Beverages</a></li>
                <li><a href="#">Iced Teas</a></li>
                <li><a href="#">Non Alcoholic</a></li>
                <li><a href="#">Plant Based Drinks</a></li>
                <li><a href="#">Water</a></li>
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
    <div class="category">
        <h2>Carbonated Drinks</h2>
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
    <div class="category">
        <h2>Coffee Drinks</h2>
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
    <div class="category">
        <h2>Energy Drinks</h2>
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
    <div class="category">
        <h2>Water</h2>
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
<!-- Scroll Up -->
<script src="frontend/scripts/scrollUp.js"></script>
<!-- Icon Script  -->
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<!-- Nav bar Script -->
<script src="frontend/scripts/navBarScript.js"></script>
<!-- Slider Script -->
<script src="frontend/scripts/imageSlider.js"></script>
</body>
</html>
