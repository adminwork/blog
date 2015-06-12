<?php

class funcMenuPost {

    private $db_host = 'localhost';
    private $db_username = 'root';
    private $db_password = '';
    private $db_name = 'blog';
    private $link;

    function __construct()
    {
        $this->link = mysqli_connect($this->db_host, $this->db_username, $this->db_password, $this->db_name)
        or die("Error " . mysqli_error($link));
    }

    //----------------------------------------------menu---------------------------------------------------------------
    public function createMenu($arrayMenu) {
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

    public function getAllCategories() {
        $result = array();

        $query = "SELECT id, name FROM categories"
        or die("Error in the consult.."
            . mysqli_error($link));
        $queryResult = $this->link->query($query);

        while($row = mysqli_fetch_array($queryResult)) {
            $result[$row['id']] = $row["name"];
        }

        return $result;
    }
    //-------------------------------------------index-----------------------------------------------------------------
    public function getFiveLastPosts($limit=5)
    {
        $result = array();

        $query = "SELECT * FROM post  ORDER BY create_at DESC LIMIT $limit";
        $queryResult = $this -> link->query($query);

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
    //-------------------------------------------categories-----------------------------------------------------------
    public function getCategoriesPosts()
    {
        foreach ($_GET as $keyget => $value) {
            $value;
        }

        $result = array();

        $query = "SELECT * FROM post WHERE category_id = $value";
        $queryResult = $this -> link->query($query);

        while($row = mysqli_fetch_array($queryResult)) {
            echo "<p><a href='post.php?id={$row['id']}'>".$row['title']."</a><br>" ;
            echo "<i>create:".$row['create_at']."</i></p>";
            echo "<br>";
        }

        return $result;
    }
    //-------------------------------------------Post-------------------------------------------------------------------
    public function getPosts()
    {
        foreach ($_GET as $key => $value) {
            $value;
        }
        $result = array();

        $query = "SELECT * FROM post WHERE id = $value";
        $queryResult = $this ->  link->query($query);

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

}