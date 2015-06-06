<?php
    require_once 'functions.php';
    require 'head.php';
?>
<HTML>
    <body>
        <div class="container">
<!---------------------------------------------------MENU-------------------------------------------------------------->
            <div style="float: right" ><a href="login.php">Log in</a></div>
            <div style="float: right" ><a href="registracia.php">Registrahion</a></div>
            <div class="header">Blog of football</div>
            <div class="btn-group-vertical" id="sidebar">
                <?php
                $categorriesArray = getAllCategories();
                createMenuF($categorriesArray);
                ?>
            </div>
<!-------------------------------------------------MENU END------------------------------------------------------------>
<!-------------------------------------------------CONTENT------------------------------------------------------------->
            <div class="content">
                <?php
                getFiveLastPosts();
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








