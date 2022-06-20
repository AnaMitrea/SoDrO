<?php

use model\Shop;

require "backend/handlers/DatabaseHandler.php";
include_once "backend/models/Shop.php";

$shop = new Shop();
?>

<div id="json_data_from_php" style="display: none;">
    <?php
    $output = $shop->getProduct();
    echo htmlspecialchars($output);
    ?>
</div>
