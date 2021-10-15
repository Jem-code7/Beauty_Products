<section class="banner-area">
      <div class="owl-carousel owl-theme">
            <?php for ($i=1; $i <= $banner->txt_link("::i"); $i++) : ?>
                  <div class="item">
                  <img src="<?php echo $banner->txt_link("::$i"); ?>" alt="banner <?php echo $i ?>">
                  </div>
            <?php endfor ?>
      </div>
</section>
