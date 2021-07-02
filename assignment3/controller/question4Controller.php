<?php
require_once('../services/question_4_service.php');
$view = "";
if (isset($_GET["query"]))
    $view = $_GET["query"];

/*
controls the RESTful services
URL mapping
*/

$question4Controller = new Question4Service();
switch ($view) {
        //query=allpic
    case "allpic":
        $question4Controller->getAllPic();
        break;

  

    case "":
        //404 - not found;
        echo ("Seems like a non-existent path. Try again");
        break;
}
