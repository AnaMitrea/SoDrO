<?php
$root = '/BackendRouting';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grapefruit Collins</title>
    <link rel="shortcut icon" type="image/svg" href="frontend/images/favicon.svg" />
    <link rel="stylesheet" href="frontend/stylesheets/globalStyle.css">
    <link rel="stylesheet" href="frontend/stylesheets/recipes/global-style-recipe.css">
    <link rel="stylesheet" href="frontend/stylesheets/recipes/style-recipe-5.css">
    <!-- Icon Script  -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>
<body>
<div class="top-bar">
    <div class="icon">
        <span id="icon" class="iconify" data-icon="ep:cold-drink"></span>
    </div>
    <div id="page-title">
        <p>SoftDrinks</p>
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
    <div class="list-items">
        <a href="<?php echo $root ?>/trending">Trending</a>
        <a href="<?php echo $root ?>/products">Products</a>
        <a href="<?php echo $root ?>/recipes">Recipes</a>
        <a href="<?php echo $root ?>/favorites">Favorites</a>
    </div>
    <div class="search-container">
        <form>
            <input type="search" placeholder="Search...">
        </form>
    </div>
    <!-- Profile Icon button -->
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
                    <p>50ml Pink Grapefruit juice</p>
                    <p>10ml Simple syrup</p>
                    <p>Soda water</p>
                    <p>Rosemary sprig</p>
                </div>
                <div class="equipment_content">
                    <h2>Equipment</h2>
                    <p>1 x Highball glass</p>
                    <p>1 x Ice</p>
                    <p>1 x Jigger</p>
                    <p>1 x Chopping Board</p>
                    <p>1 x Knife</p>
                </div>
            </div>

            <div class="instructions">
                <h2>Method</h2>
                <h3>Pour</h3>
                <p>
                    Add 50ml gin 0.0% to a highball glass, with 50ml fresh pink grapefruit juice and 10ml simple syrup. Stir well. Add ice to the glass, stir again, then top the glass with soda water.
                </p>
                <h3>Garnish</h3>
                <p>
                    Garnish with a rosemary sprig.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Grid -->
    <div class="recipe-container">
        <div class="serving-size">
            <div class="serving-size">
                <p>Servings: 1</p>
            </div>
        </div>

        <div class="recipe-title">
            <p>Grapefruit Collins</p>
        </div>

        <button id="see-recipe-btn" class="see-recipe">
            See Recipe
        </button>

        <!-- Left triangle -->
        <div class="left-triangle">
            <div class="triangle-image">
                <a href="<?php echo $root ?>/recipes?id=4">
                    <span class="iconify" data-icon="akar-icons:triangle-left"></span>
                </a>
            </div>
        </div>

        <div class="ingredient1">
            <img src="frontend/images/recipes/recipe1/grapes.png" alt="Grapes">
        </div>

        <div class="ingredient2">
            <img src="frontend/images/recipes/recipe1/icecube.png" alt="Icecubes">
        </div>

        <div class="ingredient3">
            <img src="frontend/images/recipes/recipe1/tanqueray.png" alt="Tanqueray bottle">
        </div>

        <div class="ingredient4">
            <img src="frontend/images/recipes/recipe1/elderflower_cordial.png" alt="Elderflower Cordial bottle">
        </div>

        <div class="ingredient5">
            <img src="frontend/images/recipes/recipe1/mint.png" alt="Mint leaves">
        </div>

        <div class="title-ingredient1">
            <p>Pink Grapefruit<br>Juice</p>
        </div>

        <div class="title-ingredient2">
            <p>Soda Water</p>
        </div>

        <div class="title-ingredient3">
            <p>Tanqueray</p>
        </div>

        <div class="title-ingredient4">
            <p>Simple<br>syrup</p>
        </div>

        <div class="title-ingredient5">
            <p>Rosemary<br>Sprig</p>
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
<script src="../../scripts/modalScript.js"></script>
</body>
</html>