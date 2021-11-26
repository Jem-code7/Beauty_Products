<?php 
      $products = $_f_product->getFromProductsBrands();

      $brand = array_map(function ($pro){return $pro['brand_name'];}, $_f_product->getFromBrandsSorted());
      $brand_id = array_map(function ($pro){return $pro['brand_id'];}, $_f_product->getFromBrandsSorted());

      // to use ADD Button
      if($_SERVER['REQUEST_METHOD'] == "POST")
      {
            if(isset($_POST['special_prize_submit']))
            {
                  $cart->addToCart($_POST['item_id'], $_POST['user_id']);
            }
      }
?>

<section class="product">
      <div class="container py-5 text-right">
            <div class="filter btn-group ff-roboto fs-text">
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Brands
                  </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item is-checked btn" data-filter="*" href="#">All Brands</a>
                        <?php 
                              array_map(function ($brand_id, $brand){
                                    printf('<a class="dropdown-item btn" data-filter=".%s" href="#">%s</a>', $brand_id, $brand);
                              },$brand_id, $brand);
                        ?>
                  </div>
            </div>
            
            <div class="grid">
                  <?php array_map(function($item) /*use($in_cart)*/{ ?>
                        <a href="">
                              <div class="grid-item frame p-2 text-center rounded <?php echo $item['brand_id'] ?? "1" ?>">
                                    <div class="item p-2">
                                          <div class="products">
                                                <img src="./img/1.png" alt="" class="img-fluid rounded">
                                                <h5><div style="box-sizing: content-box; display: block; height: 2em; word-wrap: break-word; overflow: hidden; text-overflow: ellipsis; line-height: 1.8em;">
                                                      <?php echo $item['name'] ?>
                                                </div></h5>
                                                <small><?php echo $item['brand_name'] ?></small>
                                                <h6><?php echo $item['price'] ?></h6>
                                                <div class="rating text-warning fs-text pb-2">
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="fas fa-star"></i></span>
                                                      <span><i class="fas fa-star"></i></span>
                                                </div>
                                                <form>
                                                      <button type="submit" class="btn btn-warning">Add to Cart</button>
                                                </form>
                                          </div>
                                    </div>
                              </div>
                        </a>
                  <?php },$products) ?>
            </div>
      </div>
</section>