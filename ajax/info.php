<?php
$temp = $_POST['id_product'];
$pieces = explode(",", $temp);

$link = mysqli_connect('localhost','root','','my_shop_db');
function get_post_by_id($post_id)
{
    global $link;
    $sql = "SELECT * FROM items WHERE id = ".$post_id;
    $result = mysqli_query($link, $sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}


?>
<?php if($pieces[0]){ ?>
<main class="page" id="page">
<section class="shopping-cart dark">
    <div class="container">
       <!-- <div class="block-heading">
         <h2>Shopping Cart</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
       </div> -->
       <div class="content">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="items">
                    <?php for($i=0;$i<count($pieces);$i++){
                        ?>
                        <div class="product" id="<?php echo $pieces[$i] ?>">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid mx-auto d-block image" src="<?php $my = get_post_by_id($pieces[$i]); echo 'public/img/'. $my['image'] ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <div class="row">
                                        <div class="col-md-5 product-name">
                                            <div class="product-name">
                                                <a href="<?php echo '/id='.$pieces[$i]; ?>"><?php $my = get_post_by_id($pieces[$i]); echo $my['title'] ?></a>
                                                <div class="product-info">
                                                    <div>Display: <span class="value">5 inch</span></div>
                                                    <div>RAM: <span class="value">4GB</span></div>
                                                    <div>Memory: <span class="value">32GB</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 quantity">
                                            <label for="quantity">Quantity:</label>
                                            <input id="quantity" type="number" value ="1" class="form-control quantity-input">
                                        </div>
                                        <div class="col-md-2 price">
                                            <span><?php echo $my['price'] ?>$</span>
                                        </div>
                                        <div class="col-md-1 price">
                                        <button type="submit" onclick="delete_i(<?php echo $pieces[$i] ?>)" class="btn btn-secondary">
                                            <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="summary">
                        <h3>Summary</h3>
                        <div class="summary-item"><span class="text">Subtotal</span><span class="price">$360</span></div>
                        <div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
                        <div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
                        <div class="summary-item"><span class="text">Total</span><span class="price">$360</span></div>
                        <button type="button" onclick="" class="btn btn-primary btn-lg btn-block">Checkout</button>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
</main>
<?php } ?>