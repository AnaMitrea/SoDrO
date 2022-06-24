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

if(isset($_GET['sort'])){
    $sort_by = $_GET['sort'];
}else {
    $sort_by = null;
}

if(strcmp($sort_by,"name_asc")){
    $type_sort = "ASC";
}else {
    $type_sort = "DESC";
}

$num_per_page = 24;
$start_from = ($page-1) * 24;

if(isset($_POST["submit-from-search-bar"])){
    $search_for = $_POST["search"];
}
else {
    $search_for = null;
}


if($search_for == null and $sort_by==null){
    $stmt = $pdo->prepare("SELECT * FROM products limit $num_per_page offset $start_from", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
}else if($search_for!=null and $sort_by==null){
    $stmt = $pdo->prepare("SELECT * FROM products where product_name like concat('%','$search_for','%')", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
}else if($search_for==null and $sort_by!=null){
    $stmt = $pdo->prepare("SELECT * FROM products order by 3 $type_sort limit $num_per_page offset $start_from", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
}else if($search_for!=null and $sort_by!=null){
    $stmt = $pdo->prepare("SELECT * FROM products where product_name like concat('%','$search_for','%') order by 3 $type_sort limit $num_per_page offset $start_from", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
}

$stmt->execute();
$stmt_count = $pdo->prepare("SELECT count(1) FROM products", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
$stmt_count->execute();
$entire_row = $stmt_count->fetch();
$number_of_pages = $entire_row[0];
$number_of_pages = ceil($number_of_pages / $num_per_page);
$search_for = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/globalStyle.css">
    <link rel="stylesheet" href="../stylesheets/style-shop.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Product</title>
    <script type="text/javascript">
        function inc(){
            <?php
            if(strlen($sort_by)>0){
            ?>
                document.getElementById("next-page").href="shop-page.php?page=<?php echo $page+1 ?>&sort=<?php echo $sort_by ?>";
            <?php
            }else{
            ?>
                document.getElementById("next-page").href="shop-page.php?page=<?php echo $page+1 ?>";
            <?php
            }
            ?>

            return;
        }
        function dec(){
            <?php
            if(strlen($sort_by)>0){
            ?>
            document.getElementById("previous-page").href="shop-page.php?page=<?php echo $page-1 ?>&sort=<?php echo $sort_by ?>";
            <?php
            }else{
            ?>
                document.getElementById("previous-page").href="shop-page.php?page=<?php echo $page-1 ?>";
            <?php
            }
            ?>
            return;
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
        <form method="post" action="shop-page-after-sort.php">
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
    <div class="sort-list">
        <p id="sort-list-title">Sort list</p>
        <form method="post" action="shop-page-after-sort.php">
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

        <div class="sorting-lists">
            <div class="sort-by sort-by-first" id="categories">
                <button class="sort-by-title">Sort list</button>
                <form class="form-responsive" method="post" action="shop-page-after-sort.php">
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

            <div class="sort-by">
                <button class="sort-by-title">Sort by</button>
                <ul class="list-categories">
                    <li><a href='shop-page.php?page=1'</a>Most viewed</li>
                    <li><a href='shop-page.php?page=1&sort=name_asc'</a>Name asc</li>
                    <li><a href='shop-page.php?page=1&sort=name_desc'</a>Name desc</li>
                    <li><a></a></li>
                </ul>
            </div>
        </div>


        <div class="shop-list">
            <?php while($row = $stmt->fetch()){?>
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
            ?>

        </div>

        <div class="choose-page">
            <?php if($page>1 && $page < $number_of_pages){?>
                <a id="previous-page" href="" onclick="dec()" class='previous'>&laquo; Previous</a>
                <a id="next-page" href="" onclick="inc()" class='next'>Next &raquo;</a>
                <?php
            }else if($page==1){
                ?>
                <a id="next-page" href="" onclick="inc()" class='next'>Next &raquo;</a>
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
<script>
  /*  if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }*/
</script>
</body>
</html>