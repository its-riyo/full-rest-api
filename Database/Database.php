<?php

    namespace Database;

    class Database
    {   
        // Database configuration info
        public static $driver = DRIVER;
        public static $host = HOST;
        public static $dbname = DBNAME;
        public static $user = USER;
        public static $password = PASSWORD;

        // Variable to store a connection
        public static $pdo;
        
        public static function connect() {

            self::$pdo = null;

            try{
                self::$pdo = new \PDO(self::$driver . ":host=". self::$host .";dbname=". self::$dbname,self::$user,self::$password,array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            }catch(\Exception $e){
                echo json_encode(["DBERROR" => "Something went wrong while connecting to the database", "Message" => $e->getMessage()]);
            }
     
            return self::$pdo;
        }

    }