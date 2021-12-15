<?php include_once './main_template/metadata.php' ?>

<body>
    <?php 
            include './section_template/heading_header.php';
            $id = $_GET['id'];
            $rows = mysqli_fetch_assoc(mysqli_query($db->con,"SELECT tbl_products.*, tbl_brands.brand_name, tbl_categories.category_name FROM ((tbl_products INNER JOIN tbl_brands ON tbl_brands.brand_id=tbl_products.brand_id) INNER JOIN tbl_categories ON tbl_categories.category_id=tbl_products.category_id) WHERE item_id=$id"));
      ?>

    <section class="main-content grad-pink-cream pb-5">

      <div class="container-fluid justify-content-center">
            <div class="row px-5 mx-5 py-3">
                  <div class="col-lg-3 mr-3 text-center border shadow">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                    <div class="carousel-item active">
                                          <img src="<?php echo ($rows['image'] != '')? "./img/Profiles/".$rows['image'] : "./img/Placeholders/No_Image_Placeholderpng.png"?>" class="d-block w-100" alt="..." style="height:500px">
                                    </div>
                                    <div class="carousel-item">
                                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4C6vGQ0BdU63VIy_ynNCWvpdNc1nuWRr_v0q0tdFDx1XibGBjNw_twTA9y6xqwI38aY0&usqp=CAU" class="d-block w-100" alt="..." style="height:500px">
                                    </div>
                                    <div class="carousel-item">
                                          <img src="https://cdn.vox-cdn.com/thumbor/IxmdZHawkrs3mEJgvqQSFXMKRWo=/0x0:1215x717/1200x800/filters:focal(739x213:933x407)/cdn.vox-cdn.com/uploads/chorus_image/image/69985281/Teemo_0.0.jpg" class="d-block w-100" alt="..." style="height:500px">
                                    </div>
                              </div>
                              <button class="carousel-control-prev my-auto" style="height:50px" type="button" data-target="#carouselExampleControls" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                              </button>
                              <button class="carousel-control-next my-auto" style="height:50px" type="button" data-target="#carouselExampleControls" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                              </button>
                        </div>
                  </div>

                  <div class="col border rounded shadow-lg">
                        <div class="container m-4">
                              <div class="row">
                                    <h3><strong><?php echo $rows['name']?></strong></h3>
                              </div>
                              <div class="row w-100">
                                    <h5><?php echo $rows['brand_name']?></h5>
                              </div>
                              <div class="row w-100">
                                    <h5><?php echo $rows['category_name']?></h5>
                              </div>
                              <br>
                              <div class="row w-100">
                                    <h5>Description</h5>
                              </div>
                              <div class="row">
                                    <div class="w-100 border border-3 border-dark p-2">
                                          <p> <?php echo $rows['description']?> </p>
                                    </div>
                              </div>
                              <br><br>
                              <div class="mt-auto">
                                    <a href="" class="btn btn-warning">Add To Cart</a> &emsp;
                                    <a href="" class="btn btn-danger">Buy Now</a>
                              </div>
                              <br>
                        </div>
                  </div>
            </div>
      </div>

      </section>

<?php include './section_template/footer_footer.php' ?>

<?php include_once './main_template/script.php'; ?>

</body>
</html> 