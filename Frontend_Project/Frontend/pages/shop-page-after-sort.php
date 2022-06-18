<?php
session_start();
include "database-handler.classes.php";
$db = new DatabaseHandler();
$pdo = $db->getConn();

$command_for_categories = "";
$command_for_values = "";
if(isset($_POST["submit-from-left"])){
    for($i=1;$i<=7;$i++)
        if(isset($_POST["check-".$i])){
            if(strlen($command_for_categories)>0){
                $command_for_categories .= (" or ");
            }
            $command_for_categories .= ("categories_tags  like concat('%','");
            $command_for_categories .= $_POST["check-".$i];
            $command_for_categories .= ("','%') ");
        }

    for($i=8;$i<=24;$i++)
        if(isset($_POST["check-".$i])){
            if(strlen($command_for_values)>0){
                $command_for_values .= (" and ");
            }
            $command_for_values .= $_POST["check-".$i];
            $command_for_values .= (" IS NOT NULL ");
        }

}

if(isset($_POST["submit-from-search-bar"])){
    $search_for = $_POST["search"];
}
else {
    $search_for = null;
}

if($command_for_categories == null and $command_for_values == null and $search_for == null){
    $stmt = $pdo->prepare("SELECT * FROM products where categories_tags like concat ('%','beverages','%') limit 24", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
}else if($command_for_categories == null and $command_for_values == null and $search_for!=null){
    $stmt = $pdo->prepare("SELECT * FROM products where product_name like concat('%','$search_for','%')", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
}else if($command_for_categories !=null and $command_for_values == null){
    $stmt = $pdo->prepare("SELECT * FROM products where $command_for_categories", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
}else if($command_for_categories == null and $command_for_values !=null){
    $stmt = $pdo->prepare("SELECT * FROM products where $command_for_values", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
}else {
    $stmt = $pdo->prepare("SELECT * FROM products where $command_for_values and $command_for_categories", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
}
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="globalStyle.css">
    <link rel="stylesheet" href="style-shop.css">

    <link rel="stylesheet" href="style-shop-after-sort.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Product</title>
    <script type="text/javascript">
        function inc(){
            document.getElementById("next-page").href="shop-page.php?page=<?php ?>";
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
        <form method="post">
            <input type="text" name="search" placeholder="Search...">
            <input type="submit" name="submit-from-search-bar">
        </form>
    </div>
    <div class="user-icon">
        <a href="../pages/dashboard.html">
            <span class="iconify" data-icon="iconoir:profile-circled"></span>
        </a>
    </div>
</div>

<div class="middle">
    <div class="shop">

        <div class="sorting-lists">
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
            <?php
            $nothing_message = true;
            while($row = $stmt->fetch()){
                $nothing_message = false;
                ?>
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
                            <p><?php echo strtok($row['brands'] , ",")?></p>
                        </div>
                        <div id="add-to-list-icon">
                            <button>&#9734;</button>
                        </div>
                    </div>
                </div>
                <?php
            }
            if($nothing_message){
                echo "<p class='error-message'>There are no products that match the criteria you have selected.</p>";
                echo "<p class='error-message'>A good suggestion would be to select as few criteria as possible or only the most important ones.</p>";
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