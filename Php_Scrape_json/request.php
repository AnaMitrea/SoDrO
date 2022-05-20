<?php
$url = 'https://world.openfoodfacts.org/cgi/search.pl?action=process&tagtype_0=categories&tag_contains_0=contains&tag_0=beverages&tagtype_1=categories&tag_contains_1=contains&tag_1=coffee_drinks&json=true';
//$url = 'https://world.openfoodfacts.org/api/v0/product/8000300211368.json';
// Connection to the API (french version here)
$result = file_get_contents($url);

// Decoding the JSON into an usable array (the value "true" confirms that the return is only an array)
$json = json_decode($result, true);

$page = 2;
$productsList = $json['products'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OFF</title>
</head>
<body>
    <h2>Example Output</h2>
    <table>
        <?php
            for($page_count = 1; $page_count < 3; $page_count = $page_count + 1) {
                for($count = 0; $count < 24; $count = $count + 1) { 
                    echo '<tr>';
                    echo    '<td>Product Name: </td>';
                    echo    '<td>' . $productsList[$count]['product_name'] . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo    '<td>Brand</td>';
                    echo     '<td>' . $productsList[$count]['brands'] . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo    '<td>Image</td>';
                    echo    '<td><img src="' . $productsList[$count]['image_small_url']  .'"/></td>';
                    echo '</tr>';
                }   
            }
            
        ?>
    </table>
</body>
</html>