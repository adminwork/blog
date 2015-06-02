<?php
    require_once 'functions.php';
    require 'head.php';
?>
<HTML>
    <body>
        <div class="container">
<!---------------------------------------------------MENU-------------------------------------------------------------->
            <nav class="navbar navbar-default" style="align-content: center; background: #49F72B; padding: 0">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="http://localhost/project/index.php">Main</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                        $categorriesArray = getAllCategories();
                        createMenu($categorriesArray);
                        ?>
                    </div>
                </div>
            </nav>
<!-------------------------------------------------MENU END------------------------------------------------------------>
<!-------------------------------------------------CONTENT------------------------------------------------------------->
            <div>
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








