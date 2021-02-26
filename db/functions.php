<?php

$link = mysqli_connect('localhost', 'root', '', 'my_shop_db');
function get_post_by_id($post_id)
{
    global $link;
    $sql = "SELECT * FROM items WHERE id = " . $post_id;
    $result = mysqli_query($link, $sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}

function get_comments($post_id)
{
    global $link;
    $sql = "SELECT * FROM coments WHERE id_article = " . $post_id;
    $result = mysqli_query($link, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $posts;
}

function nums_сomment($post_id)
{
    global $link;
    $sql = "SELECT count(*) FROM coments WHERE id_article = " . $post_id;
    $result = mysqli_query($link, $sql);
    $row = $result->fetch_row();
    $count = $row[0];
    return $count;
}

function get_posts($limit, $offset)
{
    global $link;
    $sql = "SELECT * FROM items LIMIT $limit OFFSET $offset";
    $result = mysqli_query($link, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $posts;
}

function nums()
{
    global $link;
    $sql = "SELECT count(*) FROM items";
    $result = mysqli_query($link, $sql);
    $row = $result->fetch_row();
    $count = $row[0];
    return $count;
}