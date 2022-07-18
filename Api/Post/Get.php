<?php

    // Headers
    //header('Access-Control-Allow-Origin: *');
    //header('Content-Type: application/json');


    namespace Api;

    // Including files
    include_once '../../config.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use \Models\PostModel;

    // Get data
    $data = PostModel::all();

    // Checking if something was found
    if(count($data) > 0){
        $response = json_encode($data);
        echo $response;
    } else {
        $response = json_encode(["Response" => "Error", "Message" => "0 Results"]);
        echo $response;
    }