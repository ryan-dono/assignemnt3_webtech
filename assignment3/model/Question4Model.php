<?php

require_once('DatabaseConn.php');

class Question4Model
{

    public $conn;

    public function __construct()
    {

        $db = new DatabaseConn();
        $this->conn = $db->initialize();
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

  

    public function getAllPic()
    {
        $sql = "select * from question_4";
        $result = $this->conn->query($sql);

        if ($result !== null) {
            $rows = array();
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            return $rows;
        }
    }
}
