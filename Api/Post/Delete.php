<?php

    namespace Api\Post;

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    // Including files
    include_once "../../config.php";

    use Models\PostModel;

    // Get post data (id to delete)
    $deleteQueryString = file_get_contents("php://input");
    parse_str($deleteQueryString, $data);

    // Checking if request has an id value
    if(!$data['id']) {
        $response = json_encode(["Error" => "You need to include an 'id' value within the request"]);
        echo $response;
        return false;
    }

    $id = $data['id'];
    // Deleting the model
    if(PostModel::delete($id) == true) {
        $response = json_encode(["Success" => "The post with id: ". $id ." was deleted"]);
        echo $response;
        return false;
    } else {
        $response = json_encode(["Error" => "Something went wrong :("]);
        echo $response;
        return false;
    };