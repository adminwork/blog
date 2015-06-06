<?php

session_start();

include ("bd.php");


$username = $_POST['username'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$update_at = date("m-d-y H:i:s");

$result = "SELECT id FROM users WHERE username ='{$username}' LIMIT 1";
$queryResult = $conn->query($result);

if (mysqli_num_rows($queryResult)==1)
{

    $simvols = array ("0","1","2","3","4","5","6","7","8","9",
        "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
        "A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
    for ($key = 0; $key < 6; $key++)
    {
        shuffle ($simvols);
        $string = $string.$simvols[1];

    }


    $pass = md5(md5($string));

    $query = "UPDATE users SET pass ='{$pass}' ,update_at ='{$update_at }'  WHERE username ='{$username}' ";
    $queryResult = $conn->query($query);



    $result = "SELECT email FROM users WHERE username ='{$username}' LIMIT 1";
    $queryResult = $conn->query($result);

    $row = mysqli_fetch_assoc($queryResult);
    $email = $row['email'];


    $resultmail = mail($email, "Запрос на востонавление пороля", "Здравствуйте $username ваш новый пороль : $string");

      if($resultmail)
    {
        echo "you will be sent an email with a new password . <a href='index.php'>Main page</a>";
    }
    else
    {
        echo "Is there something wrong. <a href='index.php'>Main page</a>";
    }

}
























