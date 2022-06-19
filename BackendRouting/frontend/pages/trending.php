<?php
$root = '/BackendRouting';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="frontend/images/favicon.svg" />
    <link rel="stylesheet" href="frontend/stylesheets/style-trending.css">
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
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

    <div class="body-trending">
        <div class="trending_icon">
            <a href="<?php echo $root ?>/trending">Trending Products</a>
            <span class="iconify" data-icon="el:fire"></span>
        </div>
    </div>
    <br>
    <div class="middle">
        <div class="carbonated">
            <div class="carbonated-text">
                <a href="seeMore-Carbonated.html">Top Carbonated Drinks-see more..</a>

            </div>
        <div class="carbonated-list">

            <div class="product-cell">
                <div class="cell-buttons">
                    <button>Add To List</button>
                    <button>Details</button>
                </div>
                <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                <p class="details">Sprite 0,33l-2.99&euro;</p>
            </div>
            <div class="product-cell">
                <div class="cell-buttons">
                    <button>Add To List</button>
                    <button>Details</button>
                </div>
                <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                <p class="details">Sprite 0,33l-2.99&euro;</p>
            </div>
            <div class="product-cell">
                <div class="cell-buttons">
                    <button>Add To List</button>
                    <button>Details</button>
                </div>
                <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                <p class="details">Sprite 0,33l-2.99&euro;</p>
            </div>
            <div class="product-cell">
                <div class="cell-buttons">
                    <button>Add To List</button>
                    <button>Details</button>
                </div>
                <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                <p class="details">Sprite 0,33l-2.99&euro;</p>
            </div>
            <div class="product-cell">
                <div class="cell-buttons">
                    <button>Add To List</button>
                    <button>Details</button>
                </div>
                <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                <p class="details">Sprite 0,33l-2.99&euro;</p>
            </div>
            <div class="product-cell">
                <div class="cell-buttons">
                    <button>Add To List</button>
                    <button>Details</button>
                </div>
                <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                <p class="details">Sprite 0,33l-2.99&euro;</p>
            </div>
        </div>
        </div>
        <div class="carbonated">
            <div class="carbonated-text">
                <a href="#">Top Hot Drinks-see more..</a>

            </div>
            <div class="carbonated-list">

                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
            </div>
        </div>
        <div class="carbonated">
            <div class="carbonated-text">
                <a href="#">Top Dairy Drinks-see more..</a>

            </div>
            <div class="carbonated-list">

                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
            </div>
        </div>
        <div class="carbonated">
            <div class="carbonated-text">
                <a href="#">Top Energy Drinks-see more..</a>

            </div>
            <div class="carbonated-list">

                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
            </div>
        </div>
        <div class="carbonated">
            <div class="carbonated-text">
                <a href="#">Top Non-Alcoholic Drinks-see more..</a>

            </div>
            <div class="carbonated-list">

                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
                <div class="product-cell">
                    <div class="cell-buttons">
                        <button>Add To List</button>
                        <button>Details</button>
                    </div>
                    <div><img src="frontend/images/product/Sprite.png" alt="img" class="image-product"></div>

                    <p class="details">Sprite 0,33l-2.99&euro;</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="icon">
            <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <div class="list-items-bottom">
            <a href="<?php echo $root ?>/terms">Terms</a>
            <a href="<?php echo $root ?>/blogs">Blogs</a>
            <a href="<?php echo $root ?>/about">About</a>
            <a href="<?php echo $root ?>/contact">Contact</a>
            <a href="<?php echo $root ?>/privacy">Privacy</a>
        </div>
    </footer>
</body>
</html>