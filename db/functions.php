<?php

$link = mysqli_connect('localhost','root','','my_shop_db');
function get_post_by_id($post_id)
{
    global $link;
    $sql = "SELECT * FROM items WHERE id = ".$post_id;
    $result = mysqli_query($link, $sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}
