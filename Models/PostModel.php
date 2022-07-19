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
            self::$pdo = Database::connect();

            $dataStore = [$data['title'],$data['body'],$data['author']];

            $store = self::$pdo->prepare("INSERT INTO `posts` VALUES(null,?,?,?) ");
            $store->execute($dataStore);

            return true;
        }

        // Function to update a post
        public static function update($data) {
            self::$pdo = Database::connect();

            $updateData = [$data['title'],$data['body'],$data['author'],$data['id']];

            $update = self::$pdo->prepare("UPDATE `posts` SET `title` = ?, `body` = ?, `author` = ? WHERE `id` = ? ");
            $update->execute($updateData);

            return true;
        }

        // Function to delete a post
        public static function delete($id) {
            self::$pdo = Database::connect();

            if($delete = self::$pdo->prepare("DELETE FROM `posts` WHERE `id` = ? ")) {
                if($delete->execute(array($id))) {
                    return true;
                }
            }

            return true;
        }

    }