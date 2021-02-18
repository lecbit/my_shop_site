<br><br>

<h3 class="text-center font-weight-bold my-4">Написать комментарий</h3>
<?php
$data = $_POST;

if(isset($data['c_sub'])){
  if($data['c_name'] == ''){
    echo "<div class='alert-danger'><p class='h4'>Введите имя!</p></div>";
  }
  elseif($data['c_email'] == ''){
    echo "<div class='alert-danger'><p class='h4'>Введите email!</p></div>";
  }
  elseif($data['c_text'] == ''){
    echo "<div class='alert-danger'><p class='h4'>Введите text!</p></div>";
  }
  else{
    $connect = mysqli_connect('localhost', 'root', '', 'my_shop_db');
    $c_id = $_GET['id'];
    $c_name = $data['c_name'];
    $c_email = $data['c_email'];
    $c_text = $data['c_text'];
    $sql2 = "INSERT INTO `coments` (`id`,`id_article` ,`name` , `text`) VALUES (NULL, '$c_id', '$c_name', '$c_text')";
    mysqli_query($connect,$sql2);
    echo "<div class='alert-success'><p class='h4'>Сообщение отправлено!</p></div>";
    
  }
}
?>

<div class="container">
<form class="mx-md-4" action="" method="POST">
  <div class="row">
    <div class="col-md-4 mb-4">
      <input type="text" id="name" name="c_name" class="form-control" placeholder="Имя" value="<?php echo @$_POST['c_name'] ?>">
    </div>
    <div class="col-md-6 mb-4">
      <input type="email" id="email" name="c_email" class="form-control" placeholder="Email" value="<?php echo @$_POST['c_email']?>">
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="form-group mb-4">
        <textarea class="form-control rounded" name="c_text" id="message" rows="10" placeholder="Сообщение" value="<?php echo @$data['c_text'] ?>"></textarea>
      </div>
      <div>
        <button type="submit" name="c_sub" class="btn btn-info btn-md">Отправить</button>
      </div>
    </div>
  </div>
</form>
</div>
