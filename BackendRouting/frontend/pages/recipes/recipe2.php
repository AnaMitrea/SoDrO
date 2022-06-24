<?php
$root = '/BackendRouting';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lemon Sour</title>
    <link rel="shortcut icon" type="image/svg" href="frontend/images/favicon.svg" />
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/recipes/global-style-recipe.css">
    <link rel="stylesheet" href="frontend/stylesheets/recipes/style-recipe-2.css">
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
                        <p>30ml Fresh lemon juice</p>
                        <p>1 Egg White</p>
                        <p>15ml Simple Syrup</p>
                        <p>1 Lemon twist</p>
                    </div>
                    <div class="equipment_content">
                        <h2>Equipment</h2>
                        <p>1 x Rocks glass</p>
                        <p>1 x Cocktail shaker</p>
                        <p>1 x Ice</p>
                    </div>
                </div>

                <div class="instructions">
                    <h2>Method</h2>
                    <h3>Pour</h3>
                    <p>
                        Add 50ml Tanqueray 0.0% to your shaker, along with 30ml fresh lemon juice and 15ml simple syrup. Add 1 egg white or 20ml aquafaba, then close your shaker and gently shake to activate the texture.
                    </p>
                    <h3>Mix</h3>
                    <p>
                        Open the shaker, add plenty of ice, and give it a hard shake.
                    </p>
                    <h3>Garnish</h3>
                    <p>
                        Strain into a rock glass over ice and garnish with a lemon twist.
                    </p>
                    <h4>
                        Tip:
                    </h4>
                    <p>
                        Use a potato peeler to peel a long thin strip off your lemon. Roll this lemon twist over the cocktail and watch as the lemon oils from the peel fly over the cocktail.
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
                <p>Lemon Sour</p>
            </div>

            <button id="see-recipe-btn" class="see-recipe">
                See Recipe
            </button>

            <!-- Left triangle -->
            <div class="left-triangle">
                <div class="triangle-image">
                    <a href="<?php echo $root ?>/recipes?id=1">
                        <span class="iconify" data-icon="akar-icons:triangle-left"></span>
                    </a>
                </div>
            </div>

            <!-- Right triangle -->
            <div class="right-triangle">
                <div class="triangle-image">
                    <a href="<?php echo $root ?>/recipes?id=3">
                        <span class="iconify" data-icon="akar-icons:triangle-right"></span>
                    </a>
                </div>
            </div>

            <div class="ingredient1">
                <img src="frontend/images/recipes/recipe2/lemon-juice.png" alt="Lemon Juice">
            </div>

            <div class="ingredient2">
                <img src="frontend/images/recipes/recipe2/cropped-egg-white.png" alt="Egg White">
            </div>

            <div class="ingredient3">
                <img src="frontend/images/recipes/recipe2/cropped-tanqueray.png" alt="Tanqueray bottle">
            </div>

            <div class="ingredient4">
                <img src="frontend/images/recipes/recipe2/cropped-simple-syrup.png" alt="Simple Syrup">
            </div>

            <div class="ingredient5">
                <img src="frontend/images/recipes/recipe2/lemon-twist.png" alt="Lemon Twist">
            </div>

            <div class="title-ingredient1">
                <p>Lemon Juice</p>
            </div>

            <div class="title-ingredient2">
                <p>Egg White</p>
            </div>

            <div class="title-ingredient3">
                <p>Gin</p>
            </div>

            <div class="title-ingredient4">
                <p>Simple<br>syrup</p>
            </div>

            <div class="title-ingredient5">
                <p>Lemon Twist</p>
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

<!-- Modal Script -->
    <script src="frontend/scripts/modalScript.js"></script>
</body>
</html>