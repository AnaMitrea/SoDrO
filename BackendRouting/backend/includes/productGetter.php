<?php

use model\Shop;

require "backend/handlers/DatabaseHandler.php";
require "backend/models/Shop.php";

$product = new Shop();
?>

<div id="json_data_from_php" style="display: none;">
    <?php
    $output = $product->getJson();
    echo htmlspecialchars($output);
    /* You have to escape because the result will not be valid HTML otherwise. */
    ?>
</div>
