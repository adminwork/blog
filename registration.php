<?php
require_once 'class/dbconnect.php';
require_once 'class/post.php';
require_once 'class/category.php';
require_once 'lib/function.php';
require 'footer.php';

?>
<HTML>
<?php require_once  'head.php';?>

<body>
<div class="container">
    <div style="float: right" ><a href="login.php" class="btn btn-success">Log in</a></div>
    <div style="float: right" ><a href="registracia.php" class="btn btn-success">Registrahion</a></div>
    <div class="header"><a href="index.php" ><img src = images/football_1.jpg alt = "Blog of football"></a></div>
    <div>
        <form action="action_reg.php" method="post" id="form" style="padding-left: 150px; padding-bottom: 60px" >
                <ul>
                    <li>Please fill in the required fields.</li>
                    <li>
                        <label for="first_name">Name:</label>
                        <input type="text" name="first_name" id="first_namename" required>
                        <span></span>
                    </li>
                    <li>
                        <label for="last_name">Second name:</label>
                        <input type="text" name="last_name" id="last_name" required>
                        <span></span>
                    </li>
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
                    <li>
                        <label for="pass_confirm">Repeat password:</label>
                        <input type="password" name="pass_confirm" id="pass_confirm" required>
                        <span></span>
                    </li>
                    <li>
                        <label for="users_age">Age:</label>
                        <input type="number" size="2" name="age_user" id="age_user">
                        <span></span>
                    </li>
                    <li>
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" required>
                        <span></span>
                    </li>
                    <li> <li><input type="submit" name="login" class="button" value="Submit" /></li></li>
                </ul>
        </form>
    </div>
    <div>
        <?php
        getFooter();
        ?>
    </div>
</div>
</body>
</HTML>
