<?php
$connect = mysqli_connect("localhost", "root", "", "my_shop_db") or die("ERror");
$text = $_POST['comment_place'];
$id = $_POST['page_id'];
$u_name = $_POST['u_name'];
$sql = "INSERT INTO `coments` (`id`, `text`, `name`, `id_article`) VALUES (NULL, '$text', '$u_name', '$id')";
$select = mysqli_query($connect, $sql);
echo $_POST['difficulty'];

?>