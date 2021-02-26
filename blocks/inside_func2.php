<?php
$connect = mysqli_connect("localhost", "root", "", "my_shop_db") or die("ERror");
$text = $_POST['comment_place'];
$id = $_POST['page_id'];
$sql = "INSERT INTO `coments` (`id`, `text`, `name`, `id_article`) VALUES (NULL, '$text', 'defaul', '$id')";
$select = mysqli_query($connect, $sql);
header("location: /inside.php?id=".$_POST['page_id']);
?>