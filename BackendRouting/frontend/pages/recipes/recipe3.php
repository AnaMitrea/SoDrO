<?php
$root = '/BackendRouting';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanqueray 0.0% Clover Club</title>
    <link rel="shortcut icon" type="image/svg" href="frontend/images/favicon.svg" />
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/recipes/global-style-recipe.css">
    <link rel="stylesheet" href="frontend/stylesheets/recipes/style-recipe-3.css">
    <!-- Icon Script  -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>
<body>
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

    <!-- See recipe Modal  -->

    <div id="recipe-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="information-content">
                <div class="ingredients_equipment_content">
                    <div class="ingredients_content">
                        <h2>Ingredients</h2>
                        <p>50ml Gin 0.0%</p>
                        <p>25ml Fresh lemon juice</p>
                        <p>15ml Raspberry Syrup</p>
                        <p>1 Egg white</p>
                        <p>Fresh raspberries</p>
                    </div>
                    <div class="equipment_content">
                        <h2>Equipment</h2>
                        <p>1 x Martini glass</p>
                        <p>1 x Ice</p>
                        <p>1 x Jigger</p>
                        <p>1 x Cocktail shaker</p>
                        <p>1 x Strainer</p>
                    </div>
                </div>

                <div class="instructions">
                    <h2>Method</h2>
                    <h3>Pour</h3>
                    <p>
                        Add 50ml gin 0.0%, 25ml fresh lemon juice, 15ml of your syrup and a few fresh raspberries to a shaker. Add your egg white or 20ml aquafaba if you prefer not to use an egg.
                    </p>
                    <h3>Mix</h3>
                    <p>
                        Close the shaker and gently shake it, being careful to hold the shaker at both ends. Open it up, add your ice, and shake for a second time, this time much more firmly. Double strain the cocktail through a fine strainer into a martini glass, and garnish with a fresh raspberry.
                    </p>
                    <h3>Garnish</h3>
                    <p>
                        Double strain the cocktail through a fine strainer into a martini glass, and garnish with a fresh raspberry.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Grid -->
        <div class="recipe-container">
            <div class="serving-size">
                <p>Servings: 1</p>
            </div>

            <div class="recipe-title">
                <p>Tanqueray 0.0% Clover Club</p>
            </div>

            <button id="see-recipe-btn" class="see-recipe">
                See Recipe
            </button>

            <!-- Left triangle -->
            <div class="left-triangle">
                <div class="triangle-image">
                    <a href="<?php echo $root ?>/recipes?id=2">
                        <span class="iconify" data-icon="akar-icons:triangle-left"></span>
                    </a>
                </div>
            </div>

            <!-- Right triangle -->
            <div class="right-triangle">
                <div class="triangle-image">
                    <a href="<?php echo $root ?>/recipes?id=4">
                        <span class="iconify" data-icon="akar-icons:triangle-right"></span>
                    </a>
                </div>
            </div>

            <div class="ingredient1">
                <img src="frontend/images/recipes/recipe3/raspberry-syruup.png" alt="Raspberry syrup">
            </div>

            <div class="ingredient2">
                <img src="frontend/images/recipes/recipe3/cropped-egg-white.png" alt="Egg White">
            </div>

            <div class="ingredient3">
                <img src="frontend/images/recipes/recipe3/cropped-tanqueray.png" alt="Tanqueray bottle">
            </div>

            <div class="ingredient4">
                <img src="frontend/images/recipes/recipe3/lemon-juice.png" alt="Lemon Juice">
            </div>

            <div class="ingredient5">
                <img src="frontend/images/recipes/recipe3/raspberries.png" alt="Raspberries">
            </div>

            <div class="title-ingredient1">
                <p>Raspberry<br>syrup</p>
            </div>

            <div class="title-ingredient2">
                <p>Egg White</p>
            </div>

            <div class="title-ingredient3">
                <p>Tanqueray</p>
            </div>

            <div class="title-ingredient4">
                <p>Lemon Juice</p>
            </div>

            <div class="title-ingredient5">
                <p>Raspberries</p>
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

    <!-- Modal Script -->
    <script src="frontend/scripts/modalScript.js"></script>
</body>
</html>