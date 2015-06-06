<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styleregistr.css">
</head>
<body>
<div>
    <form action="action_login.php" method="post" id="form">
        <div>
            <ul>
                <li>ENTER</li>
                <li>
                    <label for="user_login">Login:</label>
                    <input type="text" name="username" id="username" required>
                    <span></span>
                </li>
                <li>
                    <label for="pass">Password:</label>
                    <input type="password" name="pass" id="pass" required>
                    <span></span>
                </li>
                <li><input type="submit" name="login" class="button" value="Log In" /></li>
            </ul>
            <p class="regtext">No account yet? <a href="registracia.php" >Register Here</a>!</p>
            <p class="regtext">Forgot your password? <a href="lostpass.php" >Restore password here</a>!</p>
    </form>
</div>
</body>
</html>

