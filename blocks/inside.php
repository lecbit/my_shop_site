<div class="container">
  <div class="row">
  <?php
  $u_id=$_GET['id'];
  $comments = get_comments($u_id);
  $post = get_post_by_id($u_id);

?>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-4 offset-md-3">
          <div class="image-g">
            <img src="/public/img/<?php echo $post['image']; ?>" alt="">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2 offset-md-2 image-mini">
          <img src="/public/img/x.jpg" alt="">
        </div>
        <div class="col-md-2 image-mini">
          <img src="/public/img/x.jpg" alt="">
        </div>
        <div class="col-md-2 image-mini">
          <img src="/public/img/x.jpg" alt="">
        </div>
        <div class="col-md-2 image-mini">
          <img src="/public/img/x.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">

      <div class="h1"><?php echo $post['title']; ?></div>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <p><?php echo $post['description']; ?></p>
      <button type="button" class="btn btn-primary buy-button" data-toggle="button" aria-pressed="false" autocomplete="off">
        Empty button
      </button>

    </div>
  </div>
</div>

<div class="container">
  <div class="comments">
    <h3 class="title-comments">Отзывы о товаре (<?php echo nums_сomment($u_id); ?>)</h3>

    <ul class="media-list">
      <!-- Комментарий (уровень 1) -->
      <?php for($i=0;$i<nums_сomment($u_id);$i++){
        
        
        
         ?>
      <li class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object img-rounded" src="/public/img/s21.jpg" alt="" width="50">
          </a>
        </div>
        <div class="media-body">
          <div class="media-heading">
            <div class="author"><?php 
                                echo $comments[$i]['name'] ?></div>
            <div class="metadata">
              <span class="date">16 ноября 2015, 13:43</span>
            </div>
          </div>
          <div class="media-text text-justify"><?php 
                                                echo $comments[$i]['text'] ?></div>
          <div class="footer-comment">
            <span class="vote plus" title="Нравится">
              <i class="fa fa-thumbs-up"></i>
            </span>
            <span class="rating">+1</span>
            <span class="vote minus" title="Не нравится">
              <i class="fa fa-thumbs-down"></i>
            </span>
            <span class="devide">|</span>
            <span class="comment-reply">
              <a href="#" class="reply">ответить</a>
            </span>
          </div>

        </div>
      </li><!-- Конец комментария (уровень 1) -->
      <?php } ?>
    </ul>
  </div>
</div>



<div class="container">
  <div class="h1 text-center">Написать отзыв</div>
  <form action="/blocks/inside_func.php" method="post">
    <div class="row justify-content-center">
      <div class="col-md-8">


        <textarea class="form-control" rows="3" name="comment_place"></textarea>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
      <input type="hidden" name="page_id" value="<?php echo $_GET['id']; ?>" />
      <input placeholder="Ваше имя" name="u_name"?>
        <input type="submit" class="btn btn-primary pull-right" value="Отправить отзыв" aria-pressed="false" autocomplete="off">
  </form>



  <div class="pull-right">
  <div class="stars">
	<input type="radio" name="difficulty" value="X5X" id="difficulty-5" hidden>
	<label for="difficulty-5">
		<i class="fa fa-star"></i>
 		<i class="fa fa-star-o"></i>
	</label>
	<input type="radio" name="difficulty" value="X4X" id="difficulty-4" hidden>
	<label for="difficulty-4">
     <i class="fa fa-star"></i>
     <i class="fa fa-star-o"></i>
  </label>
	<input type="radio" name="difficulty" value="X3X" id="difficulty-3" hidden>
	<label for="difficulty-3">
     <i class="fa fa-star"></i>
     <i class="fa fa-star-o"></i>
  </label>
	<input type="radio" name="difficulty" value="X2X" id="difficulty-2" hidden>
	<label for="difficulty-2">
  	 <i class="fa fa-star"></i>
     <i class="fa fa-star-o"></i>
  </label>
	<input type="radio" name="difficulty" value="X1X" id="difficulty-1" hidden checked>
	<label for="difficulty-1">
  	 <i class="fa fa-star"></i>
  </label>
</div>
  </div>

</div>
</div>
</div>