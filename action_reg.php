<?php

include ("bd.php");


class Registration extends ConnectDB
{

    private  $first_name;
    private $last_name;
    private $username;
    private $pass;
    private $pass_confirm;
    private $age_user;
    private $email;
    private $error;
    private $result2;

    function __construct()
    {
        parent :: __construct();
        $this -> first_name = $_POST['first_name'];
        $this -> last_name = $_POST['last_name'];
        $this -> username = $_POST['username'];
        $this -> pass = $_POST['pass'];
        $this -> pass_confirm = $_POST['pass_confirm'];
        $this -> age_user = $_POST['age_user'];
        $this -> email = $_POST['email'];
    }

    public function UserRegistration(){
        $success = true;

        if($this -> pass != $this -> pass_confirm) {
            $this -> error .= "Passwords do not match.<a href='registracia.php''>Registrahion</a><br/> \n\r";
            $success = false;
        }

        $this -> pass = md5(md5($this -> pass));

        $create_at = date("m-d-y H:i:s");

        if($success) {

            $result = "SELECT id FROM users WHERE username='{$this -> username}'";
            $queryResult = $this -> conn->query($result);

            $myrow = mysqli_fetch_array($queryResult);
            if (!empty($myrow['id'])) {
                exit ("Sorry, username you entered is already registered . Please enter a different username .");
            }
            // если такого нет, то сохраняем данные
            $this -> result2 = 'INSERT INTO users(id, username, pass, email, create_at, update_at, first_name, last_name, avatar) VALUES ("", "' . $this -> username . '", "' . $this ->pass . '", "' . $this -> email . '", "'.$create_at.'", "", "' . $this ->first_name . '", "' . $this ->last_name . '", "")';
            $queryResult2 = $this -> conn->query($this -> result2);

            if ($queryResult2 == 'TRUE') {
                echo "You have successfully logged in! Now you can log in to the site. <a href='index.php'>Main page</a>";
            } else {
                echo "Error! You are not registred.<a href='index.php'>Main page</a>";
            }
        }
        echo ($this -> error != "") ? $this -> error : "";
    }

}
$objregistration = new Registration();
$objregistration -> UserRegistration();

