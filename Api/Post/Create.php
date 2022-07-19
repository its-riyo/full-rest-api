<?php

    namespace Api\Post;

    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    // Including files
    include_once "../../config.php";

    use Models\PostModel;

    // Get post data
    // $data = json_decode(file_get_contents("php://input"));
    $data = $_POST;

    if($data['title'] != null && $data['body'] != null && $data['author'] != null) {
        // Storing a new post
        if(PostModel::create($data) == true) {
            $response = json_encode(["Success" => "Post created successfully!", "Data" => $data]);
            echo $response;
        }
    } else {
        $response = json_encode(["Error" => "Fields are missing"]);
        echo $response;
    };