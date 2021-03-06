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
    <div class="container" id="container">
        <div style="float: right" ><a href="login.php" class="btn btn-success">Log in</a></div>
        <div style="float: right" ><a href="registration.php" class="btn btn-success">Registrahion</a></div>
        <div class="header"><a href="index.php" ><img src = images/football_1.jpg alt = "Blog of football"></a></div>
        <div class="btn-group-vertical" id="sidebar">
            <?php
                $menu = new Category();
                $arr = $menu->getAllCategories();
                createMenu($arr);
            ?>
        </div>
        <div class="content" id="body">
            <?php
                if (!isset($_GET) || !isset($_GET["id"])) {
                    exit('no correct category id');
                }

                $id = $_GET['id'];
                if (!is_numeric($id)) {
                    exit('no correct category id');
                }

                $post = new Post();
                $object = $post->getPostByCategoryId($id);
                renderingByPost($object);
            ?>
        </div>
        <div>
            <?php
                 getFooter();
            ?>
        </div>
    </div>
</body>

</HTML>