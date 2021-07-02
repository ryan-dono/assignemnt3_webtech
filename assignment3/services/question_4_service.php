<?php
require_once("Rest.php");
require_once("../model/Question4Model.php");

class Question4Service extends Rest
{



  
    function getAllPic()
    {
        $question4 = new Question4Model();
        $Data = $question4->getAllPic();
        if (empty($Data)) {
            $statusCode = 404;
            $rawData = array('error' => 'Picture Not Found!');
        } else {
            $statusCode = 200;
        }

        // Select format type JSON or XML
        $requestContentType = 'application/json';


        $this->setHttpHeaders($requestContentType, $statusCode);
        $this->setEncoder($requestContentType, $Data);
    }

}
