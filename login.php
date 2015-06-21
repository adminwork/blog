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
            <div style="float: right" ><a href="registration.php" class="btn btn-success">Registrahion</a></div>
            <div class="header"><a href="index.php" ><img src = images/football_1.jpg alt = "Blog of football"></a></div>
            <div>
                <form action="action_login.php" method="post" id="form" style="padding-left: 200px">
                    <div>
                        <ul>
                            <li><font>Log in</font></li>
                            <li>
                                <label for="user_login">Username:</label>
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
                        <p class="regtext">No account yet? <a href="registration.php" >Register Here</a>!</p>
                        <p class="regtext">Forgot your password? <a href="lostpass.php" >Restore password here</a>!</p>
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








