<div class="container">
<div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php $news = getNews(1);echo $news["title"];?></h4>
          </div>
          <div class="card-body">
            <div class="image">
                <img src="public/img/11.jpg" alt="">
            </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Убрать из корзины</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php $news = getNews(2);echo $news["title"];?></h4>
          </div>
          <div class="card-body">
          <div class="image">
                <img src="public/img/se.jpg" alt="">
            </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <div class="batton" id="<?php echo $news["id"]; ?>" data-hren="<?php echo $news["id"]; ?>"></div>
            
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php $news = getNews(3);echo $news["title"];?></h4>
          </div>
          <div class="card-body">
          <div class="image">
                <img src="public/img/x.jpg" alt="">
            </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <div class="batton" id="<?php echo $news["id"]; ?>" data-hren="<?php echo $news["id"]; ?>"></div>
          </div>
        </div>
      </div>

      <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php $news = getNews(1);echo $news["title"];?></h4>
          </div>
          <div class="card-body">
          <div class="image">
                <img src="public/img/11.jpg" alt="">
            </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Купить</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php $news = getNews(2);echo $news["title"];?></h4>
          </div>
          <div class="card-body">
          <div class="image">
                <img src="public/img/se.jpg" alt="">
            </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Купить</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php $news = getNews(3);echo $news["title"];?></h4>
          </div>
          <div class="card-body">
          <div class="image">
                <img src="public/img/x.jpg" alt="">
            </div>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Купить</button>
          </div>
        </div>
      </div>

</div>
    <!-- -->

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
    <script src="public/index.js"></script>