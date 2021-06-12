<?php
require_once('../services/question_2_service.php');
$view = "";
if (isset($_GET["query"]))
    $view = $_GET["query"];

/*
controls the RESTful services
URL mapping
*/

$question2RestController = new Question2Service();
switch ($view) {
        //query=users
    case "users":
        $question2RestController->getAllUsers();
        break;

        //query=chats&id=1
    case "chats":
        $question2RestController->getChatById($_GET["id"]);
        break;

    case "":
        //404 - not found;
        echo ("Seems like a non-existent path. Try again");
        break;
}
