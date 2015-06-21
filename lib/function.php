<?php

function createMenu($arrayMenu)
{
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

function renderingByCategory($arrayCategory)
{
    if (!is_array($arrayCategory) || !count($arrayCategory)) {
        return;
    }
    foreach ($arrayCategory as $key => $value) {
        echo "<p><a href='post.php?id={$value['id']}'>" . $value['title'] . "</a><br>";
        echo "<i>create:" . $value['create_at'] . "</i></p>";
        echo "<br>";

    }
}

function renderingByPost($post)
{
    if (isset($post['img']) && !empty($post['img'])) {
        echo '<p class="leftimg"><img src="' . $post['img'] . '"></p>';
    } else {
        echo "";
    }
    echo "<H3>" . $post['title'] . "</H3>";
    echo $post['text'] . "<br>";
    echo "<br>";
}

function renderingByIndex($arrayFiveLastPosts)
{
    if (!is_array($arrayFiveLastPosts) || !count($arrayFiveLastPosts)) {
        return;
    }
    foreach ($arrayFiveLastPosts as $key => $value) {
        if (isset($value['img']) && !empty($value['img'])) {
            echo '<p class="leftimg"><img src="' . $value['img'] . '"></p>';
        } else {
            echo "";
        }
        echo "<H3>" . $value['title'] . "</H3>";
        echo $value['text'] . "<br>";
        echo "<i>create:" . $value['create_at'] . "</i>";
        echo "<br>";
    }
}