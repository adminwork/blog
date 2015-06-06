<?php

session_start();

include ("bd.php");

if (isset($_POST['username'])) { $username = $_POST['username'];}
if (isset($_POST['pass'])) { $pass=$_POST['pass'];}

if (empty($username) or empty($pass))
{
    exit ("You do not have entered all the information , go back and fill in all fields !");
}

$username = stripslashes($username);
$username = htmlspecialchars($username);
$pass = stripslashes($pass);
$pass = htmlspecialchars($pass);
//удаляем лишние пробелы
$username = trim($username);
$pass = trim($pass);



$result = "SELECT * FROM users WHERE username='$username'";
$queryResult = $conn->query($result);

$myrow = mysqli_fetch_array($queryResult);

if (empty($myrow['pass']))
{
    exit ("Sorry, you entered an incorrect login or password. <a href='index.php'>Main page</a> ");
}
else {
    //если существует, то сверяем пароли
    if ($myrow['pass']==$pass) {
        $_SESSION['username']=$myrow['username'];
        $_SESSION['id']=$myrow['id'];
        echo "You have successfully logged in ! <a href='index.php'>Main page</a>";
    }
    else {
        exit ("Sorry, you entered an incorrect login or password .<a href='index.php'>Main page</a>");
    }
}
