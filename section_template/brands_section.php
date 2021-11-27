<section class="brands-area">
      <h3>Brands</h3>
      <div class="container-fluid py-3 border-top border-bottom border-secondary">
            <div class="px-2">
            <div class="owl-carousel owl-theme">
                  <?php 
                        array_map(function($item) /*use($in_cart)*/{
                              if($item['brand_id'] != 1) :
                  ?>
                        <div class="item">
                              <div class="products text-center">
                                    <a href=""><img src="./img/Placeholders/Logo_Placeholder.png" alt="product" class="rounded mx-auto d-block"></a>
                                    <h6><?php echo $item['brand_name']?></h6>
                              </div>
                        </div>
                  <?php 
                              endif;
                        },$_f_product->getFromBrands()) 
                  ?>
            </div>
            </div>
      </div>
</section>