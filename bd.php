<?php
$servername = "localhost";
$dbname = "blog";

$str = file_get_contents('config.ini');
$str = strip_tags($str);
$str=str_replace('::::', ' ', $str);
$arr = explode(" ", $str);

$dbusername = $arr[0];
$dbpassword = $arr[1];

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}