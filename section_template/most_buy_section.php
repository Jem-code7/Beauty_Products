<section class="most-buy" style="min-height:100vh">
      <div class="container py-5">
            <h3>Most Buy</h3>
            <div class="grid">
                  <?php array_map(function($item) /*use($in_cart)*/{ ?>
                        <a href="./product.php?id=<?php echo $item['item_id']?>">
                              <div class="grid-item frame p-2 text-center rounded">
                                    <div class="item p-2">
                                          <div class="products">
                                          <img src="<?php echo ($item['image'] != '')? "./img/Product_Image/".$item['image'] : "./img/Placeholders/No_Image_Placeholderpng.png"?>" alt="" class="img-fluid rounded">
                                          <h5><div style="box-sizing: content-box; display: block; height: 2em; word-wrap: break-word; overflow: hidden; text-overflow: ellipsis; line-height: 1.8em;">
                                                <?php echo $item['name'] ?>
                                          </div></h5>
                                          <small><?php echo $item['brand_name'] ?></small>
                                          <h6><?php echo $item['price'] ?></h6>
                                          <form method="post" action="./php_modals/add_to_cart.php">
                                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                                                <input type="hidden" name="url" value="$homeurl.'products_gallery.php'">

                                                <button type="submit" name="addcart" class="btn btn-warning">Add to Cart</button>
                                          </form>
                                          </div>
                                    </div>
                              </div>
                        </a>
                  <?php },$_f_product->getFromProductsBrandsHighlight()) ?>
            </div>
      </div>
</section>