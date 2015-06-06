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
    <form action="action_lostpass.php" method="post" id="form">
        <div>
            <ul>
                <li>Restore password</li>
                <li>
                    <label for="user_login">Login:</label>
                    <input type="text" name="username" id="username" required>
                    <span></span>
                </li>
                <li><input type="submit" name="restore_pass" class="button" value="Restore" /></li>
            </ul>
            <p class="regtext">No account yet? <a href="registracia.php" >Register Here</a>!</p>
    </form>
</div>
</body>
</html>

