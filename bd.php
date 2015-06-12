<?php

class ConnectDB
{
    private $servername = "localhost";
    private $dbname = "blog";
    private $dbusername;
    private $dbpassword;
    public $conn;

    function __construct()
    {
        $str = file_get_contents('config.ini');
        $str = strip_tags($str);
        $str=str_replace('::::', ' ', $str);
        $arr = explode(" ", $str);

        $this -> dbusername = $arr[0];
        $this -> dbpassword = $arr[1];

        $this -> conn = new mysqli($this -> servername, $this -> dbusername, $this -> bpassword, $this -> dbname);
        if ($this -> conn->connect_error) {
            die("Connection failed: " . $this -> conn->connect_error);
        }
    }
}

