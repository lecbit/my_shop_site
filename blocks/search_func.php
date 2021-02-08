<br><br>
<?php
$connect = mysqli_connect("localhost", "root", "", "my_shop_db") or die ("ERror");
$search_get = $_GET['search'];
$sql = "SELECT * FROM `items` WHERE `title` LIKE '%$search_get%' ";
$select = mysqli_query($connect, $sql);
echo '<hr>';

for($i = 0; $i< $select_while = mysqli_fetch_assoc($select) ; $i++){
    ?>
    <b><a href="/id=<?php echo $select_while['id'] ?>"> <?php echo $select_while['title'] ?> </a></b><br>
    <?php
}
mysqli_close($connect);
?>