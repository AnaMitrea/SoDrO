<?php

use App\Handler\DatabaseMigration;
require 'backend/handlers/DatabaseHandler.php';
require 'backend/handlers/DatabaseMigration.php';

echo "<h1>Creating the tables that are used in the application...</h1><br>";

$db = new DatabaseMigration();
echo "<h3>Applying migrations...</h3>";
$db->createMigrations();
echo "<h3>Migrations applied successfully!</h3>";