<?php

    namespace Models;

    use \Database\Database;

    class ApikeyModel
    {

        // Get a PDO connection
        public static $pdo;

        public static function keyCheck() {

            if (isset($_GET['apiKey'])) {
                $apiKey = $_GET['apiKey'];
                self::$pdo = Database::connect();

                $check = self::$pdo->prepare("SELECT * FROM `api_keys` WHERE `api_key` = ? ");
                $check->execute(array($apiKey));

                $result = $check->rowCount();
                if($result <= 0) {
                    // Invalid API key 
                    return false;
                } else {
                    return true;
                }
                
            } else {
                return false;
            };

            
        }

    }