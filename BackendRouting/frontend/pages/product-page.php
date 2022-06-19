<?php

use model\Product;
$root = '/BackendRouting';
include "backend/handlers/DatabaseHandler.php";
include "backend/models/Product.php";

session_start();

$prod_id = $_GET['code'] ?? 1;
$product = new Product($prod_id);
$ingredients_contor = count($product->getIngredientsTypes());
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
            <h1>
                <?php
                $pieces = explode(" ",$product->getRow()['product_name']);
                $first_part = implode(" ", array_splice($pieces, 0, 2));
                echo $first_part
                ?>
            </h1>
            <div class="images">
                <div class="main-photo">
                    <img class="prod-img" src="<?php echo $product->getRow()['image_url']?>" alt="photo">
                </div>
            </div>
        </div>

        <div class="details">

            <div class="ingredients-list">
                <h2>NUTRITIONAL VALUES</h2>
                    <h4><?php
                    if($product->getRow()['nutrition_data_per'] != "serving"){
                            echo "Per  {$product->getRow()['nutrition_data_per']}";
                        }else{
                            echo "Per serving";
                        }
                        ?>
                    </h4>
                <table id="ingredients-val">
                    <tr>
                        <th>Nutrition value</th>
                        <th>Quantity/Value</th>
                    </tr>
                    <?php
                      $vector_poz=0;
                        for($i=19;$i<$ingredients_contor+36;$i=$i+2){
                            if($product->getRow()[$i]!=null){
                                ?>
                            <tr>
                                <td><?php echo $product->getIngredientsTypes()[$vector_poz]?></td>
                                <td><?php
                                    echo $product->getRow()[$i];
                                    echo $product->getRow()[$i+1];
                                    ?>
                                </td>
                            </tr>
                                <?php
                            }
                            $vector_poz=$vector_poz+1;
                        }
                        ?>
                </table>
            </div>


            <div class="additional-data">
                <h2>DETAILS</h2>
                <?php
                    if($product->getRow()['brands']!=null){
                        echo"<p>Brand</p>";
                        echo "<p>{$product->getRow()['brands']}</p>";
                    }
                    if($product->getRow()['quantity']!=null){
                        echo"<p>Product quantity</p>";
                        echo "<p>{$product->getRow()['quantity']}</p>";
                    }
                    if($product->getRow()['serving_size']!=null){
                        echo"<p>A portion</p>";
                        echo "<p>{$product->getRow()['serving_size']}</p>";
                    }
                    if($product->getRow()['packaging']!=null){
                        echo"<p>Package</p>";
                        $pieces = explode(",",$product->getRow()['packaging']);
                        $first_part = implode(" ", array_splice($pieces, 0, 3));
                        echo  "<p>$first_part</p>";
                    }
                    if($product->getRow()['countries']!=null){
                        echo"<p>Countries where you can find it</p>";
                        $pieces = explode(",",$product->getRow()['countries']);
                        $first_part = implode(" : ", array_splice($pieces, 0, 4));
                        echo  "<p>$first_part</p>";
                    }
                    if($product->getRow()['nutriscore_grade']!=null){
                        echo "<img class='grade-image' src='grades/nutriscore-{$product->getRow()['nutriscore_grade']}.png' alt='img'>";
                    }
                ?>
            </div>

        </div>
    </div>

    <div class="bottom-middle">

        <?php
         if($product->getRow()['categories']!=null){
        ?>
        <div class="bottom-details other-categories">
            <h2>OTHER CATEGORIES TO WITCH IT BELONGS</h2>
            <?php
            echo "<p>{$product->getRow()['categories']}</p>";
            ?>
        </div>
        <?php
         }
        ?>
        <?php
         if($product->getRow()['labels']!=null){
        ?>
        <div class="bottom-details labels">
            <h2>LABELS</h2>
            <?php
            echo "<p>{$product->getRow()['labels']}</p>";
            ?>
        </div>
        <?php
         }
        ?>

        <?php
         if($product->getRow()['ingredients_text_en']!=null){
        ?>
        <div class="bottom-details text-ingredients">
            <h2>DETAILED INGREDIENTS</h2>
            <?php
            echo "<p>{$product->getRow()['ingredients_text_en']}</p>";
            ?>
        </div>
        <?php
         }
        ?>

    </div>

    <!-- Product Recommandation -->
    <div class="other-products-from-same-categories">
        <h2>SIMILAR PRODUCTS</h2>
        <div class="list-of">
            <?php
            $category = null;
            $pieces = explode(", ",substr($product->getRow()['categories_tags'],1));
            if(count($pieces)>1)
                $category = substr($pieces[1],4,-1);

            $stmt2 = $pdo->prepare("SELECT * FROM products where categories_tags like '%$category%' limit 5", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $stmt2->execute();
            while($row2 = $stmt2->fetch()){
            ?>
                <div class="product-cell">
                    <div onclick="window.location.href='product-page.php?code=<?php echo $row2['code']?>'">
                        <img class="image-product" src="<?php echo $row2['image_url'] ?>" alt="img2"></div>
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">
                                <?php
                                $pieces = explode(" ",$row2['product_name']);
                                $first_part = implode(" ", array_splice($pieces, 0, 2));
                                echo  $first_part;
                                ?></p>
                            <p><?php
                                if(strlen($first_part)<15)
                                    echo strtok($row2['brands'] , ",")
                                ?>
                            </p>
                        </div>
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
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
</body>
</html>