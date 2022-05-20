<?php

$countries = array("Volvo", "BMW", "Toyota");

$cities = array("Volv1", "BMW1", "Toyota1");

?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Countries</h1>
    <?php
      foreach ($countries as $country) { 
        echo '<p>';
          echo '<h4>Country name: ' . $country . '</h4>';
        echo '</p>';
      }
    ?>
    <h1>Cities</h1>
    <?php

      foreach ($cities as $city) { 
        echo '<p>';
          echo '<h4>City name: ' . $city . '</h4>';
        echo '</p>';
      }
    ?>

  </body>
</html>
