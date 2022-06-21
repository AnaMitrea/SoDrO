<?php
session_start();
include "database-handler.classes.php";
$db = new DatabaseHandler();
$pdo = $db->getConn();

$stmt = $pdo->prepare("SELECT * FROM products limit 30", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/globalStyle.css">
    <link rel="stylesheet" href="../stylesheets/style-favorites.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Product</title>
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
            <a href="#">Recipes</a>
            <a href="#">Favorites</a>
        </div>
    </div>
    <div class="list-items">
        <a href="../pages/trending.html">Trending</a>
        <a href="../pages/shop-page.html">Products</a>
        <a href="#">Recipes</a>
        <a href="#">Favorites</a>
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

    <div class="your-favorites">
        <h2>Your favorite list:</h2>
        <div class="your-favorites-products">

            <?php
            for($i=0;$i<5;$i++){
                ?>
                <?php $row = $stmt->fetch();?>
                <div class="product-cell">
                    <div onclick="window.location.href='product-page.php?code=<?php echo $row['code']?>'"> <img class="image-product" src="<?php echo $row['image_url'] ?>" alt="img2"></div>
                    <div class="product-cell-bottom">
                        <div class="product-cell-bottom-name">
                            <p class="product-name">
                                <?php
                                $pieces = explode(" ",$row['product_name']);
                                $first_part = implode(" ", array_splice($pieces, 0, 2));
                                echo  $first_part;
                                ?></p>

                            <p><?php
                                if(strlen($first_part)<15)
                                    echo strtok($row['brands'] , ",")
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

            if($i == 0){
                echo "<p class='error-message'>There are no products in your favorite list.</p>";
            }

            ?>
        </div>
    </div>
    <div class="recommended">

        <?php
        for($i=1;$i<=3;$i++){
            echo "<h2>Category $i</h2>";
                ?>
                <div class="favorite-category">
                    <div class="large-div">
                        <?php $row = $stmt->fetch();?>
                        <div class="product-cell">
                            <div onclick="window.location.href='product-page.php?code=<?php echo $row['code']?>'"> <img class="image-product" src="<?php echo $row['image_url'] ?>" alt="img2"></div>
                            <div class="product-cell-bottom">
                                <div class="product-cell-bottom-name">
                                    <p class="product-name">
                                        <?php
                                        $pieces = explode(" ",$row['product_name']);
                                        $first_part = implode(" ", array_splice($pieces, 0, 2));
                                        echo  $first_part;
                                        ?></p>

                                    <p><?php
                                        if(strlen($first_part)<15)
                                            echo strtok($row['brands'] , ",")
                                        ?>
                                    </p>
                                </div>
                                <div id="add-to-list-icon">
                                    <button>&#9734;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-div small-div-1">
                        <?php $row = $stmt->fetch();?>
                        <div class="product-cell">
                            <div onclick="window.location.href='product-page.php?code=<?php echo $row['code']?>'"> <img class="image-product" src="<?php echo $row['image_url'] ?>" alt="img2"></div>
                            <div class="product-cell-bottom">
                                <div class="product-cell-bottom-name">
                                    <p class="product-name">
                                        <?php
                                        $pieces = explode(" ",$row['product_name']);
                                        $first_part = implode(" ", array_splice($pieces, 0, 2));
                                        echo  $first_part;
                                        ?></p>

                                    <p><?php
                                        if(strlen($first_part)<15)
                                            echo strtok($row['brands'] , ",")
                                        ?>
                                    </p>
                                </div>
                                <div id="add-to-list-icon">
                                    <button>&#9734;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-div small-div-2">
                        <?php $row = $stmt->fetch();?>
                        <div class="product-cell">
                            <div onclick="window.location.href='product-page.php?code=<?php echo $row['code']?>'"> <img class="image-product" src="<?php echo $row['image_url'] ?>" alt="img2"></div>
                            <div class="product-cell-bottom">
                                <div class="product-cell-bottom-name">
                                    <p class="product-name">
                                        <?php
                                        $pieces = explode(" ",$row['product_name']);
                                        $first_part = implode(" ", array_splice($pieces, 0, 2));
                                        echo  $first_part;
                                        ?></p>

                                    <p><?php
                                        if(strlen($first_part)<15)
                                            echo strtok($row['brands'] , ",")
                                        ?>
                                    </p>
                                </div>
                                <div id="add-to-list-icon">
                                    <button>&#9734;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-div small-div-3">
                        <?php $row = $stmt->fetch();?>
                        <div class="product-cell">
                            <div onclick="window.location.href='product-page.php?code=<?php echo $row['code']?>'"> <img class="image-product" src="<?php echo $row['image_url'] ?>" alt="img2"></div>
                            <div class="product-cell-bottom">
                                <div class="product-cell-bottom-name">
                                    <p class="product-name">
                                        <?php
                                        $pieces = explode(" ",$row['product_name']);
                                        $first_part = implode(" ", array_splice($pieces, 0, 2));
                                        echo  $first_part;
                                        ?></p>

                                    <p><?php
                                        if(strlen($first_part)<15)
                                            echo strtok($row['brands'] , ",")
                                        ?>
                                    </p>
                                </div>
                                <div id="add-to-list-icon">
                                    <button>&#9734;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-div small-div-4">
                        <?php $row = $stmt->fetch();?>
                        <div class="product-cell">
                            <div onclick="window.location.href='product-page.php?code=<?php echo $row['code']?>'"> <img class="image-product" src="<?php echo $row['image_url'] ?>" alt="img2"></div>
                            <div class="product-cell-bottom">
                                <div class="product-cell-bottom-name">
                                    <p class="product-name">
                                        <?php
                                        $pieces = explode(" ",$row['product_name']);
                                        $first_part = implode(" ", array_splice($pieces, 0, 2));
                                        echo  $first_part;
                                        ?></p>

                                    <p><?php
                                        if(strlen($first_part)<15)
                                            echo strtok($row['brands'] , ",")
                                        ?>
                                    </p>
                                </div>
                                <div id="add-to-list-icon">
                                    <button>&#9734;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
        }
        ?>
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