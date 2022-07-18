<?php

    namespace Models;

    use \Database\Database;

    class PostModel
    {
        // Setting up the model's table
        private static $table = "posts";

        // Getting a PDO connection
        private static $pdo;

        // Function to get all posts from database
        public static function all() {
            self::$pdo = Database::connect();

            $data = self::$pdo->prepare("SELECT * FROM `posts` ");
            $data->execute();
            $data = $data->fetchAll();

            return $data;
        }

        // Function to get a post by id
        public static function find($id) {
            self::$pdo = Database::connect();

            $data = self::$pdo->prepare("SELECT * FROM `posts` WHERE `id` = ? ");
            $data->execute(array($id));
            $data = $data->fetchAll();

            return $data;
        }

        // Function to create a new Post
        public static function create($data) {
            
        }

    }