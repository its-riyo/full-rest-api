<?php

    namespace Api\Post;

    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    // Including files
    include_once "../../config.php";

    use Models\PostModel;
    use Models\ApikeyModel;

    // Check if request has an apiKey param
    if(ApikeyModel::keyCheck() == false) {
        $response = json_encode(['Error' => 'You need a valid apiKey!']);
        echo $response;
    } else {
        // Get post data
        $deleteQueryString = file_get_contents("php://input");
        parse_str($deleteQueryString, $data);

        if(!$data['id'] || count($data) <= 0) {
            $response = json_encode(["Error" => "You need to fill all the fields!"]);
            echo $response;
            return false;
        }

        if(PostModel::update($data) == true) {
            $response = json_encode(["Success" => "The post was updated!", "Data" => $data]);
            echo $response;
            return false;
        } else {
            $response = json_encode(["Error" => "OOps, something went wrong :("]);
            echo $response;
            return false;
        };
    };