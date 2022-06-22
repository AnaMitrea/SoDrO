<?php
use App\Database\DatabaseHandler;
include 'application/class/views/shop.phtml';

if (!headers_sent()) {
    session_start();
}

/* TODO de adaugat treaba cu cookie ca sa aiba acces sau nu */

$root = '/BackendRouting';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/style-shop.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
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
            <form action="<?php echo $root ?>/products" method="post">
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

    <!-- Main Content of page -->
    <div class="middle">
            <div class="sort-list">
                <p id="sort-list-title">Sort list</p>
                <!-- Form -->
                <form action="<?php echo $root?>/products" method="post">
                    <p class="tag">Categories:</p>
                    <label><input type="checkbox" name="check-1" value="sweetened">sweetened</label><br>
                    <label><input type="checkbox" name="check-2" value="unsweetened">unsweetened</label><br>
                    <label><input type="checkbox" name="check-3" value="artificial sweetened">artificial sweetened</label><br>
                    <label><input type="checkbox" name="check-4" value="teas">teas</label><br>
                    <label><input type="checkbox" name="check-5" value="milk and dairy">milk and dairy</label><br>
                    <label><input type="checkbox" name="check-6" value="sugar-snacks">sugar-snacks</label><br>
                    <label><input type="checkbox" name="check-7" value="cereals">cereals</label><br>
                    <p class="tag">Vitamin:</p>
                    <label><input type="checkbox" name="check-8" value="vitamin_c_value">vitamin-c</label><br>
                    <label><input type="checkbox" name="check-9" value="vitamin_b6_value">vitamin-b6</label><br>
                    <label><input type="checkbox" name="check-10" value="vitamin_b12_value">vitamin-b12</label><br>
                    <label><input type="checkbox" name="check-11" value="potassium_value">potassium</label><br>
                    <label><input type="checkbox" name="check-12" value="calcium_value">calcium</label><br>
                    <label><input type="checkbox" name="check-13" value="caffeine_value">caffeine</label><br>
                    <label><input type="checkbox" name="check-14" value="taurine_value">taurine</label><br>
                    <p class="tag">Vitamin(without):</p>
                    <label><input type="checkbox" name="check-15" value="energy_kj_value">energy kj</label><br>
                    <label><input type="checkbox" name="check-16" value="energy_kcal_value">energy kcal</label><br>
                    <label><input type="checkbox" name="check-17" value="fat_value">fat value</label><br>
                    <label><input type="checkbox" name="check-18" value="saturated_fat_value">saturated fat</label><br>
                    <label><input type="checkbox" name="check-19" value="carbohydrates_value">carbohydrates</label><br>
                    <label><input type="checkbox" name="check-20" value="sugars_value">sugar</label><br>
                    <label><input type="checkbox" name="check-21" value="fiber_value">fiber</label><br>
                    <label><input type="checkbox" name="check-22" value="proteins_value">protein</label><br>
                    <label><input type="checkbox" name="check-23" value="salt_value">salt</label><br>
                    <label><input type="checkbox" name="check-24" value="sodium_sodium">sodium</label><br>
                    <input type="submit" name="submit-from-left">
                </form>
            </div>
            <div class="shop">
                <!-- Filter List -->
                <div class="sorting-lists">
                    <div class="sort-by sort-by-first" id="categories">
                        <button class="sort-by-title">Sort list</button>
                        <!-- Form -->
                        <form class="form-responsive" method="post" action="<?php echo $root?>/products">
                            <p class="tag">Categories:</p>
                            <label><input type="checkbox" name="check-1" value="sweetened">sweetened</label><br>
                            <label><input type="checkbox" name="check-2" value="unsweetened">unsweetened</label><br>
                            <label><input type="checkbox" name="check-3" value="artificial sweetened">artificial sweetened</label><br>
                            <label><input type="checkbox" name="check-4" value="teas">teas</label><br>
                            <label><input type="checkbox" name="check-5" value="milk and dairy">milk and dairy</label><br>
                            <label><input type="checkbox" name="check-6" value="sugar-snacks">sugar-snacks</label><br>
                            <label><input type="checkbox" name="check-7" value="cereals">cereals</label><br>
                            <p class="tag">Vitamin:</p>
                            <label><input type="checkbox" name="check-8" value="vitamin_c_value">vitamin-c</label><br>
                            <label><input type="checkbox" name="check-9" value="vitamin_b6_value">vitamin-b6</label><br>
                            <label><input type="checkbox" name="check-10" value="vitamin_b12_value">vitamin-b12</label><br>
                            <label><input type="checkbox" name="check-11" value="potassium_value">potassium</label><br>
                            <label><input type="checkbox" name="check-12" value="calcium_value">calcium</label><br>
                            <label><input type="checkbox" name="check-13" value="caffeine_value">caffeine</label><br>
                            <label><input type="checkbox" name="check-14" value="taurine_value">taurine</label><br>
                            <p class="tag">Vitamin(without):</p>
                            <label><input type="checkbox" name="check-15" value="energy_kj_value">energy kj</label><br>
                            <label><input type="checkbox" name="check-16" value="energy_kcal_value">energy kcal</label><br>
                            <label><input type="checkbox" name="check-17" value="fat_value">fat value</label><br>
                            <label><input type="checkbox" name="check-18" value="saturated_fat_value">saturated fat</label><br>
                            <label><input type="checkbox" name="check-19" value="carbohydrates_value">carbohydrates</label><br>
                            <label><input type="checkbox" name="check-20" value="sugars_value">sugar</label><br>
                            <label><input type="checkbox" name="check-21" value="fiber_value">fiber</label><br>
                            <label><input type="checkbox" name="check-22" value="proteins_value">protein</label><br>
                            <label><input type="checkbox" name="check-23" value="salt_value">salt</label><br>
                            <label><input type="checkbox" name="check-24" value="sodium_sodium">sodium</label><br>
                            <input type="submit" name="submit-from-left">
                        </form>
                    </div>

                    <!-- Sort By : Most Viewed, Name Asc, Name Desc -->
                    <div class="sort-by">
                        <button class="sort-by-title">Sort by</button>
                        <ul class="list-categories">
                            <li><a href='<?php echo $root?>/products?page=1'>Most viewed</a></li>
                            <li><a href='<?php echo $root?>/products?page=1&sort=name_asc'>Name asc</a></li>
                            <li><a href='<?php echo $root?>/products?page=1&sort=name_desc'>Name desc</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Products Container - contents added from javascript -->
                <div id="shop_list_container" class="shop-list">

                </div>

                <!-- Choose Page Buttons -->
                <div id="choose_page_container" class="choose-page">

                </div>
            </div>
        </div>

    <!-- Footer pages -->
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
    <script>
      /*  if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }*/
    </script>
    <script src="frontend/scripts/Shop.js"></script>
</body>
</html>