<?php
session_start();
include "database-handler.classes.php";
$db = new DatabaseHandler();
$pdo = $db->getConn();

if(isset($_GET['code'])){
    $prod_id = $_GET['code'];
}else {
    $prod_id = 1;
}
$stmt = $pdo->prepare("SELECT * FROM products where code='$prod_id'", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
$stmt->execute();
$row = $stmt->fetch();

$ingredients_types = array("Energy kj","Energy kcal","Fat",
    "Saturated fat","Carbohydrates","Sugar","Fiber","Proteins",
    "Salt","Sodium","Energy","Vitamin-C","Vitamin-B6",
    "Vitamin-B12","Potassium","Calcium","Coffeine","Taurine");
$ingredients_contor=count($ingredients_types);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/globalStyle.css">
    <link rel="stylesheet" href="../stylesheets/style-product-page.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Single Product</title>
</head>
<body>
<div class="top-bar">
    <div class="icon">
        <span id="icon" class="iconify" data-icon="ep:cold-drink"></span>
    </div>

    <div id="page-title">
        <p>SoftDrinks</p>
    </div>

    <div class="shop-list-icon">
        <span class="iconify" data-icon="bx:list-ul"></span>
        <div class="list-items-responsive">
            <a href="../pages/trending.html">Trending</a>
            <a href="../pages/shop-page.html">Products</a>
            <a href="../pages/seeMore-Carbonated.html">Recipes</a>
            <a href="../pages/trending.html">Favorites</a>
        </div>
    </div>

    <div class="list-items">
        <a href="../pages/trending.html">Trending</a>
        <a href="../pages/shop-page.html">Products</a>
        <a href="../pages/seeMore-Carbonated.html">Recipes</a>
        <a href="../pages/trending.html">Favorites</a>
    </div>
    <div class="search-container">
        <form method="post">
            <input type="text" name="search" placeholder="Search...">
            <input type="submit" name="submit-from-search-bar">
        </form>
    </div>

    <div class="user-icon">
        <a href="../pages/dashboard.html">
            <span id="user-iconify" class="iconify" data-icon="iconoir:profile-circled"></span>
        </a>
    </div>
</div>

<div class="middle">

    <div class="top-middle">
        <div class="swiper">
            <h1>
                <?php
                $pieces = explode(" ",$row['product_name']);
                $first_part = implode(" ", array_splice($pieces, 0, 2));
                echo $first_part
                ?>
            </h1>
            <div class="images">
                <div class="main-photo">
                    <img class="prod-img" src="<?php echo $row['image_url']?>" alt="photo">
                </div>
            </div>
        </div>

        <div class="details">

            <div class="ingredients-list">
                <h2>NUTRITIONAL VALUES</h2>
                    <h4><?php
                    if($row['nutrition_data_per']!="serving"){
                            echo "Per  {$row['nutrition_data_per']}";
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
                            if($row[$i]!=null){
                                ?>
                            <tr>
                                <td><?php echo $ingredients_types[$vector_poz]?></td>
                                <td><?php
                                    echo $row[$i];
                                    echo $row[$i+1];
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
                    if($row['brands']!=null){
                        echo"<p>Brand</p>";
                        echo "<p>{$row['brands']}</p>";
                    }
                    if($row['quantity']!=null){
                        echo"<p>Product quantity</p>";
                        echo "<p>{$row['quantity']}</p>";
                    }
                    if($row['serving_size']!=null){
                        echo"<p>A portion</p>";
                        echo "<p>{$row['serving_size']}</p>";
                    }
                    if($row['packaging']!=null){
                        echo"<p>Package</p>";
                        $pieces = explode(",",$row['packaging']);
                        $first_part = implode(" ", array_splice($pieces, 0, 3));
                        echo  "<p>$first_part</p>";
                    }
                    if($row['countries']!=null){
                        echo"<p>Countries where you can find it</p>";
                        $pieces = explode(",",$row['countries']);
                        $first_part = implode(" : ", array_splice($pieces, 0, 4));
                        echo  "<p>$first_part</p>";
                    }
                    if($row['nutriscore_grade']!=null){
                        echo "<img class='grade-image' src='grades/nutriscore-{$row['nutriscore_grade']}.png' alt='img'>";
                    }
                ?>
            </div>

        </div>
    </div>

    <div class="bottom-middle">

        <?php
         if($row['categories']!=null and $row['categories']!=null){
        ?>
        <div class="bottom-details other-categories">
            <h2>OTHER CATEGORIES TO WITCH IT BELONGS</h2>
            <?php
            echo "<p>{$row['categories']}</p>";
            ?>
        </div>
        <?php
         }
        ?>
        <?php
         if($row['labels']!=null and $row['labels']!=null){
        ?>
        <div class="bottom-details labels">
            <h2>LABELS</h2>
            <?php
            echo "<p>{$row['labels']}</p>";
            ?>
        </div>
        <?php
         }
        ?>

        <?php
         if($row['ingredients_text_en']!=null and $row['ingredients_text_en']!=null){
        ?>
        <div class="bottom-details text-ingredients">
            <h2>DETAILED INGREDIENTS</h2>
            <?php
            echo "<p>{$row['ingredients_text_en']}</p>";
            ?>
        </div>
        <?php
         }
        ?>

    </div>

    <div class="other-products-from-same-categories">
        <h2>SIMILAR PRODUCTS</h2>
        <div class="list-of">
            <?php
            $category = null;
            $pieces = explode(", ",substr($row['categories_tags'],1));
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
    <div class="list-items-bottom">
        <a href="../../footer-pages/terms.html">Terms</a>
        <a href="../../footer-pages/blogs.html">Blogs</a>
        <a href="../../footer-pages/about.html">About</a>
        <a href="../../footer-pages/contact.html">Contact</a>
        <a href="../../footer-pages/privacy.html">Privacy</a>
    </div>
</footer>
</body>
</html>