<div class="container">
<?php
$num = 0;

$page = isset($_GET['page']) ? $_GET['page']: 1;
$limit = 6;
$offset = $limit * ($page - 1);
$post = get_posts($limit,$offset);

for ($i=0; $i < 8/3; $i++) { ?>
  <div class="card-deck mb-3 text-center">
  <?php
  for ($j=0; $j < 3; $j++) { 
    if(!isset($post[$num])){
      break;
    }
    ?>
    <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php echo $post[$num]["title"];?></h4>
          </div>
          <div class="card-body">
          <div class="image">
            <img src="<?php echo 'public/img/'.$post[$num]['image']; ?>"> 
          </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <div class="batton" data-hren="<?php echo $post[$num]['id']; ?>" id='<?php echo $post[$num]["id"]; ?>' idd='<?php echo $num ?>'></div>
          </div>
        </div>
        <?php $num++;
  } ?>
  </div>
<?php } ?>

    <!-- -->

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="/" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="/">1</a></li>
            <?php
            
            for($i=0;$i < nums()/6-1;$i++){ ?>
            
            <li class="page-item"><a class="page-link" href="?page=<?php echo $i+2 ?>"><?php echo $i+2 ?></a></li>
            <?php }
            ?>

            <li class="page-item">
                <a class="page-link" href="?page=<?php echo ceil(nums()/6) ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    <script src="public/index.js"></script>