<section class="most-buy">
      <div class="container py-5">
            <h3>Most Buy</h3>
            <div class="grid">
                  <?php for ($i=0; $i < 10; $i++) : ?>
                  <div class="grid-item border p-2 text-center rounded">
                        <div class="item py-2">
                              <div class="products">
                              <a href=""><img src="./img/brand-skinmagical.jfif" alt="" class="img-fluid rounded"></a>
                              <h4>Products name</h4>
                              <h6>Price</h6>
                              <form>
                                    <button type="submit" class="btn btn-warning">Add to Cart</button>
                              </form>
                              </div>
                        </div>
                  </div>
                  <?php endfor ?>
            </div>
      </div>
</section>