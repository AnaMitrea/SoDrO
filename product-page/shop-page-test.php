<?php
session_start();
include "database-handler.classes.php";
$db = new DatabaseHandler();
$pdo = $db->getConn();

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else {
    $page = 1;
}

$num_per_page = 24;
$start_from = ($page-1) * 24;

$stmt = $pdo->prepare("SELECT * FROM products limit $num_per_page offset $start_from", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
$stmt->execute();
$stmt_count = $pdo->prepare("SELECT count(1) FROM products", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
$stmt_count->execute();
$entire_row = $stmt_count->fetch();
$number_of_pages = $entire_row[0];
$number_of_pages = ceil($number_of_pages / $num_per_page);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-shop.css">
    <link rel="stylesheet" href="globalStyle.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Product</title>
    <script type="text/javascript">
        function inc(){
                document.getElementById("next-page").href="shop-page-test.php?page=<?php echo $page+1 ?>";
                return false;
        }
        function dec(){
                document.getElementById("previous-page").href="shop-page-test.php?page=<?php echo $page-1 ?>";
                return false;
        }

    </script>
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
            <form>
                <input type="search" placeholder="Search...">
            </form>
        </div>
        <div class="user-icon">
            <a href="../pages/dashboard.html">
                <span class="iconify" data-icon="iconoir:profile-circled"></span>
            </a>
        </div>
    </div>
   
    <div class="middle">
            <div class="sort-list">
                <p>Sort list</p>
                <p class="tag">Categories:</p>
                <form>
                    <label><input type="checkbox" name="check-1" value="value">sweetened</label><br>
                    <label><input type="checkbox" name="check-2" value="value">unsweetened</label><br>
                    <label><input type="checkbox" name="check-3" value="value">artificial sweetened</label><br>
                    <label><input type="checkbox" name="check-4" value="value">teas</label><br>
                    <label><input type="checkbox" name="check-5" value="value">milk and dairy</label><br>
                    <label><input type="checkbox" name="check-6" value="value">sugar-snacks</label><br>
                    <label><input type="checkbox" name="check-7" value="value">cereals</label><br>
                <p class="tag">Vitamin:</p>
                    <label><input type="checkbox" name="check-8" value="value">vitamin-c</label><br>
                    <label><input type="checkbox" name="check-9" value="value">vitamin-b6</label><br>
                    <label><input type="checkbox" name="check-10" value="value">vitamin-b12</label><br>
                    <label><input type="checkbox" name="check-11" value="value">potassium</label><br>
                    <label><input type="checkbox" name="check-12" value="value">calcium</label><br>
                    <label><input type="checkbox" name="check-13" value="value">caffeine</label><br>
                    <label><input type="checkbox" name="check-14" value="value">taurine</label><br>
                <p class="tag">Vitamin(without):</p>
                    <label><input type="checkbox" name="check-15" value="value">energy kj</label><br>
                    <label><input type="checkbox" name="check-16" value="value">energy kcal</label><br>
                    <label><input type="checkbox" name="check-17" value="value">fat value</label><br>
                    <label><input type="checkbox" name="check-18" value="value">saturated fat</label><br>
                    <label><input type="checkbox" name="check-19" value="value">carbohydrates</label><br>
                    <label><input type="checkbox" name="check-20" value="value">sugar</label><br>
                    <label><input type="checkbox" name="check-21" value="value">fiber</label><br>
                    <label><input type="checkbox" name="check-22" value="value">protein</label><br>
                    <label><input type="checkbox" name="check-23" value="value">salt</label><br>
                    <label><input type="checkbox" name="check-21" value="value">sodium</label><br>
                </form>
            </div>
            <div class="shop">
                    
                       <div class="sorting-lists">
                            <div class="sort-by" id="categories">
                                <button class="sort-by-title">Sort list</button>
                                <ul class="list-categories">
                                    <li>Name</li>
                                    <li>Price</li>
                                    <li>...</li>
                                    <li>...</li>
                                    <li>...</li>
                                    <li>...</li>
                                </ul> 
                            </div>

                            <div class="sort-by">
                                <button class="sort-by-title">Sort by</button>
                                <ul class="list-categories">
                                    <li>Name</li>
                                    <li>Price</li>
                                    <li>...</li>
                                    <li>...</li>
                                    <li>...</li>
                                    <li>...</li>
                                </ul> 
                            </div>
                   </div>
                    <div class="shop-list">
                       <?php while($row = $stmt->fetch()){?>
                        <div class="product-cell">
                            <div class="cell-buttons">
                                <button onclick="window.location.href='product-page.html'">Details</button>
                                <button>Add To List</button>
                            </div>
                            <p class="product-name"><?php echo $row['product_name'] ?></p>
                            <div> <img class="image-product" src="<?php echo $row['image_url'] ?>" alt="img2"></div>
                            <p><?php echo $row['brands'] ?></p>
                        </div>
                        <?php
                             }
                            ?>

                    </div>

                    <div class="choose-page">
                        <?php if($page>1 && $page < $number_of_pages){?>
                            <a id="previous-page" href="" onclick="dec()" class='previous'>&laquo; Previous</a>
                            <a id="next-page" href="" onclick="inc()" class='next'>Next &raquo;</a>
                        <?php
                        }else if($page==1){
                        ?>
                            <a id="next-page" href="shop-page-test.php?page=<?php echo $page ?>" onclick="inc()" class='next'>Next &raquo</a>
                        <?php
                        }else if( $page == $number_of_pages){
                        ?>
                            <a id="previous-page" href="" onclick="dec()" class='previous'>&laquo; Previous</a>
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