<?php
$mysqli = false;
function connectDB()
{
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "", "my_shop_db");
    $mysqli->query("SET NAMES 'utf-8'");
}

function closeDB()
{
    global $mysqli;
    $mysqli->close();
}

function getNews($id)
{
    global $mysqli;
    connectDB();
    if ($id) {
        $where = "WHERE id = " . $id;
        $result = $mysqli->query("SELECT * FROM `items`$where ORDER BY `id` DESC");
    } else {
        $result = $mysqli->query("SELECT * FROM `items` ORDER BY `id` DESC");
    }
    closeDB();

    if (!$id)
        return resultToArray($result);
    else
        return $result->fetch_assoc();
}

function resultToArray($result)
{
    $array = array();
    while (($row = $result->fetch_assoc()) != false)
        $array[] = $row;
    return $array;
}
