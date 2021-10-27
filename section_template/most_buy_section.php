<section class="most-buy">
      <div class="container py-5">
            <h3>Most Buy</h3>
            <div class="grid">
                  <?php for ($i=0; $i < 10; $i++) : ?>
                        <a href="">
                              <div class="grid-item frame p-2 text-center rounded">
                                    <div class="item p-2">
                                          <div class="products">
                                          <img src="./img/brand-skinmagical.jfif" alt="" class="img-fluid rounded">
                                          <h4>Products name</h4>
                                          <h6>Price</h6>
                                          <form>
                                                <button type="submit" class="btn btn-warning">Add to Cart</button>
                                          </form>
                                          </div>
                                    </div>
                              </div>
                        </a>
                  <?php endfor ?>
            </div>
      </div>
</section>