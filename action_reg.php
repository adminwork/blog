<?php

include ("bd.php");


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$pass_confirm = $_POST['pass_confirm'];
$age_user = $_POST['age_user'];
$email = $_POST['email'];

$success = true;


if($pass != $pass_confirm) {
    $error .= "Passwords do not match.<a href='registracia.php''>Registrahion</a><br/> \n\r";
    $success = false;
}

$pass = md5(md5($pass));

if($success) {

    $result = "SELECT id FROM users WHERE username='$username'";
    $queryResult = $conn->query($result);

    $myrow = mysqli_fetch_array($queryResult);
    if (!empty($myrow['id'])) {
        exit ("Sorry, username you entered is already registered . Please enter a different username .");
    }
// если такого нет, то сохраняем данные
    $result2 = 'INSERT INTO users(id, username, pass, email, create_at, update_at, first_name, last_name, avatar) VALUES ("", "' . $username . '", "' . $pass . '", "' . $email . '", "", "", "' . $first_name . '", "' . $last_name . '", "")';
    $queryResult2 = $conn->query($result2);

    if ($queryResult2 == 'TRUE') {
        echo "You have successfully logged in! Now you can log in to the site. <a href='index.php'>Main page</a>";
    } else {
        echo "Error! You are not registred.<a href='index.php'>Main page</a>";
    }
}
echo ($error != "") ? $error : "";