<?php
require_once("Rest.php");
require_once("../model/Question2Model.php");

class Question2Service extends Rest
{


    function getAllUsers()
    {
        $question2 = new Question2Model();
        $rawData = $question2->getAllUsers();
        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No Users Found!');
        } else {
            $statusCode = 200;
        }

        // Select format type JSON or XML
        $requestContentType = 'application/json';


        $this->setHttpHeaders($requestContentType, $statusCode);
        $this->setEncoder($requestContentType, $rawData);
    }

    function getChatById($id)
    {
        $question2 = new Question2Model();
        $rawData = $question2->getChatById($id);
        if (empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'No Chat Found!');
        } else {
            $statusCode = 200;
        }

        // Select format type JSON or XML
        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);
        $this->setEncoder($requestContentType, $rawData);
    }
}
