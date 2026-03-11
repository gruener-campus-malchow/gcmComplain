<?php

require_once("../../lib/Database.php");

$database = new Database();


function get_request_handler($query) {
    global $database;
    
    $person_email = $query["person_email"] ?? "";

    $result = $database->query("SELECT * FROM beschwerde WHERE person_email = '$person_email'");
    echo json_encode($result);
}


switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET": get_request_handler($_GET); break;
    default: echo "";
}
