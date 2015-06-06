<?php
//----------------------------------------------menu-------------------------------------------------------------------
function createMenu($arrayMenu) {
    if (!is_array($arrayMenu) || !count($arrayMenu)) {
        return;
    }
    echo '<ul class="nav navbar-nav">';
    foreach ($arrayMenu as $key => $value) {
        echo '<li style="width:200px;">'."<a href='category.php?id={$key}'>";
        echo $value;
        echo '</a></li>';
    }
    echo '</ul>';
}

function createMenuF($arrayMenu) {
    if (!is_array($arrayMenu) || !count($arrayMenu)) {
        return;
    }
    foreach ($arrayMenu as $key => $value) {
        echo "<a href='category.php?id={$key}' class='btn btn-default'>";
        echo $value;
        echo '</a>';
    }
    echo '</ul>';
}

function getAllCategories() {
    $link = mysqli_connect("localhost","root","","blog") or die("Error " . mysqli_error($link));
    $result = array();

    $query = "SELECT id, name FROM categories"
    or die("Error in the consult.."
        . mysqli_error($link));
    $queryResult = $link->query($query);

    while($row = mysqli_fetch_array($queryResult)) {
        $result[$row['id']] = $row["name"];
    }

    return $result;
}

//-------------------------------------------index----------------------------------------------------------------------
function getFiveLastPosts()
{
    $link = mysqli_connect("localhost", "root", "", "blog") or die("Error " . mysqli_error($link));
    $result = array();

    $query = "SELECT * FROM post  ORDER BY create_at DESC LIMIT 5";
    $queryResult = $link->query($query);

    while($row = mysqli_fetch_array($queryResult)) {
        if(isset($row['img'])&&!empty($row['img'])){
            echo '<p class="leftimg"><img src="'.$row['img'].'"></p>';
        }else{
            echo "";}
        echo "<H3>".$row['title']."</H3>";
        echo $row['text'] ."<br>";
        echo "<i>create:".$row['create_at']."</i>";
        echo "<br>";
    }
    return $result;
}

//-------------------------------------------categories--------------------------------------------------------------

function getCategoriesPosts()
{
    foreach ($_GET as $keyget => $value) {
        $value;
    }

    $link = mysqli_connect("localhost", "root", "", "blog") or die("Error " . mysqli_error($link));
    $result = array();

    $query = "SELECT * FROM post WHERE category_id = $value";
    $queryResult = $link->query($query);

    while($row = mysqli_fetch_array($queryResult)) {
        echo "<p><a href='post.php?id={$row['id']}'>".$row['title']."</a><br>" ;
        echo "<i>create:".$row['create_at']."</i></p>";
        echo "<br>";
    }

    return $result;
}

//-------------------------------------------Post----------------------------------------------------------------------



function getPosts()
{
    foreach ($_GET as $key => $value) {
        $value;
    }
    $link = mysqli_connect("localhost", "root", "", "blog") or die("Error " . mysqli_error($link));
    $result = array();

    $query = "SELECT * FROM post WHERE id = $value";
    $queryResult = $link->query($query);

    while($row = mysqli_fetch_array($queryResult)) {
        if(isset($row['img'])&&!empty($row['img'])){
            echo '<p class="leftimg"><img src="'.$row['img'].'"></p>';
        }else{
            echo "";}
        echo "<H3>".$row['title']."</H3>";
        echo $row['text']."<br>";
        echo "<br>";
    }

    return $result;
}

