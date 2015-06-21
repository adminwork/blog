<?php
session_start();

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
        <form action="action_lostpass.php" method="post" id="form" style="padding-left: 150px; padding-bottom: 60px">
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
    <div>
        <?php
        getFooter();
        ?>
    </div>
</div>
</body>
</HTML>

