<?php

namespace App\Database;

class DatabaseMigration extends DatabaseHandler
{
    private $pdo;

    public function __construct() {
        $this->pdo = $this->getConn();
    }

    /**
     * Creates the database tables
     * @return void
     */
    public function createMigrations() {
        echo "Migration 1...";
        $this->createMigration_001();
        echo " applied! <br>";

        echo "Migration 2...";
        $this->createMigration_002();
        echo " applied! <br>";

        echo "Migration 3...";
        $this->createMigration_003();
        echo " applied! <br>";

        echo "Migration 4...";
        $this->createMigration_004();
        echo " applied! <br>";
    }

    private function createMigration_001(){
        $this->pdo->exec("DROP TABLE IF EXISTS \"public\".\"products1\";");
        $this->pdo->exec("CREATE TABLE \"public\".\"products1\" (
            \"id_product\" serial primary key,
            \"code\" text,
            \"image_url\" text,
            \"product_name\" text,
            \"quantity\" text,
            \"serving_size\" text,
            \"packaging\" text,
            \"brands\" text,
            \"brands_tags\" text,
            \"brand_owner\" text,
            \"categories\" text,
            \"categories_tags\" text,
            \"labels\" text,
            \"labels_tags\" text,
            \"countries\" text,
            \"countries_tags\" text,
            \"ingredients_text_en\" text,
            \"allergens\" text,
            \"allergens_tags\" text,
            \"nutrition_data_per\" text,
            \"energy_kj_value\" text,
            \"enerkj_unit\" text,
            \"energy_kcal_value\" text,
            \"energy_kcal_unit\" text,
            \"fat_value\" text,
            \"fat_unit\" text,
            \"saturated_fat_value\" text,
            \"saturated_fat_unit\" text,
            \"carbohydrates_value\" text,
            \"carbohydrates_unit\" text,
            \"sugars_value\" text,
            \"sugars_unit\" text,
            \"fiber_value\" text,
            \"fiber_unit\" text,
            \"proteins_value\" text,
            \"proteins_unit\" text,
            \"salt_value\" text,
            \"salt_unit\" text,
            \"sodium_value\" text,
            \"sodium_unit\" text,
            \"energy_value\" text,
            \"energy_unit\" text,
            \"vitamin_c_value\" text,
            \"vitamin_c_unit\" text,
            \"vitamin_b6_value\" text,
            \"vitamin_b6_unit\" text,
            \"vitamin_b12_value\" text,
            \"vitamin_b12_unit\" text,
            \"potassium_value\" text,
            \"potassium_unit\" text,
            \"calcium_value\" text,
            \"calcium_unit\" text,
            \"caffeine_value\" text,
            \"caffeine_unit\" text,
            \"taurine_value\" text,
            \"taurine_unit\" text,
            \"food_groups_tags\" text,
            \"nutriscore_grade\" text
            );
        ");
    }

    private function createMigration_002(){
        $this->pdo->exec("DROP TABLE IF EXISTS \"public\".\"users1\";");
        $this->pdo->exec("
            CREATE TABLE \"public\".\"users1\" (
            \"id\" serial primary key,
            \"email\" text,
            \"password\" text,
            \"username\" text,
            \"birthdate\" text,
            \"isadmin\" bool NOT NULL DEFAULT false
            );
        ");
    }

    private function createMigration_003() {
        $this->pdo->exec("DROP TABLE IF EXISTS \"public\".\"sessions1\";");
        $this->pdo->exec("
            CREATE TABLE \"public\".\"sessions1\" (
            \"id\" text NOT NULL,
            \"last_updated\" int8 NOT NULL,
            \"expiry\" int8 NOT NULL,
            \"data\" text NOT NULL
            );
        ");
    }

    private function createMigration_004() {
        $this->pdo->exec("DROP TABLE IF EXISTS \"public\".\"favorites1\";");
        $this->pdo->exec("
            CREATE TABLE \"public\".\"favorites1\" (
            \"id\" serial primary key,
            \"id_user\" int4,
            \"id_product\" int4,
            CONSTRAINT \"fk_user\" FOREIGN KEY (\"id_user\") REFERENCES \"public\".\"users1\"(\"id\"),
            CONSTRAINT \"fk_product\" FOREIGN KEY (\"id_product\") REFERENCES \"public\".\"products1\"(\"id_product\")
            );
        ");
    }
}