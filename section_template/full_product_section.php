<section class="product">
      <div class="container py-5">
            <div class="filter button-group text-right ff-roboto fs-text">
                  <button class="btn is-checked" data-filter="*">All Brand</button>
                  <button class="btn" data-filter=".Lotion">Lotion</button>
                  <button class="btn" data-filter=".Shampoo">Shampoo</button>
                  <button class="btn" data-filter=".Facial-Cream">Facial Cream</button>
                  <button class="btn" data-filter=".Lipstick">Lipstick</button>
            </div>
            <div class="grid">
                  <?php for ($i=0; $i < 10; $i++) : ?>
                        <a href="">
                              <div class="grid-item frame p-2 text-center rounded Lipstick">
                                    <div class="item p-2">
                                          <div class="products">
                                                <img src="./img/1.png" alt="" class="img-fluid rounded">
                                                <h4>Products name</h4>
                                                <h6>Price</h6>
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
                        <a href="">
                              <div class="grid-item here frame p-2 text-center rounded Lotion">
                                    <div class="item p-2">
                                          <div class="products">
                                                <img src="./img/2.png" alt="" class="img-fluid rounded">
                                                <h4>Products name</h4>
                                                <h6>Price</h6>
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
                        <a href="">
                              <div class="grid-item here frame p-2 text-center rounded Shampoo">
                                    <div class="item p-2">
                                          <div class="products">
                                                <img src="./img/3.png" alt="" class="img-fluid rounded">
                                                <h4>Products name</h4>
                                                <h6>Price</h6>
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
                        <a href="">
                              <div class="grid-item here frame p-2 text-center rounded Facial-Cream">
                                    <div class="item p-2">
                                          <div class="products">
                                                <img src="./img/4.png" alt="" class="img-fluid rounded">
                                                <h4>Products name</h4>
                                                <h6>Price</h6>
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
                  <?php endfor ?>
            </div>
      </div>
</section>