<section class="banner-area">
      <div class="owl-carousel owl-theme">
            <?php for ($i=1; $i <= $_banner->txt_link("::i"); $i++) : ?>
                  <div class="item">
                  <img src="<?php echo $_banner->txt_link("::$i"); ?>" alt="banner <?php echo $i ?>">
                  </div>
            <?php endfor ?>
      </div>
</section>
