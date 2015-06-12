<?php

session_start();

include ("bd.php");

class LostPass extends ConnectDB
{

    public $username;
    public $pass;
    public $email;
    public  $update_at;
    public $query;


    function __construct()
    {
        parent :: __construct();
        $this -> username =  $_POST['username'];
        $this -> pass = $_POST['pass'];
        $this -> email = $_POST['email'];
    }

    public function CreatePass()
    {
        $result = "SELECT id FROM users WHERE username ='{$this -> username}' LIMIT 1";
        $queryResult = $this -> conn->query($result);

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

            $this -> update_at = date("m-d-y H:i:s");
            $this -> pass = md5(md5($string));

            $this -> query = "UPDATE users SET pass ='{$this ->pass}' ,update_at ='{$this -> update_at }'  WHERE username ='{$this -> username}' ";
            $queryResult = $this -> conn->query($this -> query);



            $result = "SELECT email FROM users WHERE username ='{$this -> username}' LIMIT 1";
            $queryResult = $this ->conn->query($result);

            $row = mysqli_fetch_assoc($queryResult);
            $this -> email = $row['email'];


            $resultmail = mail($this -> email, "Запрос на востонавление пороля", "Здравствуйте {$this -> username}, ваш новый пороль : $string");

            if($resultmail)
            {
                echo "you will be sent an email with a new password . <a href='index.php'>Main page</a>";
            }
            else
            {
                echo "Is there something wrong. <a href='index.php'>Main page</a>";
            }

        }
    }


}

$object = new LostPass();
$object -> CreatePass();





















