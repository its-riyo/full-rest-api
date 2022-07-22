<?php

    namespace Api\Post;

    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    // Including files
    include_once '../../config.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use Models\ApikeyModel;
    use \Models\PostModel;
        
    // Check if request has an apiKey param
    if(ApikeyModel::keyCheck() == false) {
        $response = json_encode(['Error' => 'You need a valid apiKey!']);
        echo $response;
    } else {
        // Get data
        $data = PostModel::all();

        // Checking if something was found
        if(count($data) > 0){
            $response = json_encode($data);
            echo $response;
        } else {
            $response = json_encode(["Response" => "Error", "Message" => "0 Results"]);
            echo $response;
        };
    };