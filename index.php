<?php
    require_once 'functions.php';
?>
<HTML>
    <body>
        <div class="container">
<!---------------------------------------------------MENU-------------------------------------------------------------->
            <div style="float: right" ><a href="login.php" class="btn btn-success">Log in</a></div>
            <div style="float: right" ><a href="registracia.php" class="btn btn-success">Registrahion</a></div>
            <div class="header"><a href="index.php" ><img src = images/football_1.jpg alt = "Blog of football"></a></div>
            <div class="btn-group-vertical" id="sidebar">
                <?php
//                $categorriesArray = getAllCategories();
//                createMenu($categorriesArray);
                $menu = new funcMenuPost();
                $arr = $menu -> getAllCategories();
                $menu -> createMenu($arr);
                ?>
            </div>
<!-------------------------------------------------MENU END------------------------------------------------------------>
<!-------------------------------------------------CONTENT------------------------------------------------------------->
            <div class="content">
                <?php
                  $menu -> GetFiveLastPosts();
                ?>
            </div>
<!----------------------------------------------CONTENT END------------------------------------------------------------>

<!-------------------------------------FOOTER---------------------------------------------------------------------------->
            <div>
                <?php
                require 'footer.php';
                ?>
            </div>
        </div>
    </body>
</HTML>








