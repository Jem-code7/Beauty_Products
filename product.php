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
                  <div class="col-lg-4 mr-3 text-center border shadow" style="height: fit-content">
                        <img src="<?php echo ($rows['image'] != '')? "./img/Profiles/".$rows['image'] : "./img/Placeholders/No_Image_Placeholderpng.png"?>" class="d-block w-100" alt="..." style="height:500px">
                  </div>

                  <div class="col border rounded shadow-lg">
                        <div class="container">
                              <div class="row">
                                    <h3><strong><?php echo $rows['name']?></strong></h3>
                              </div>
                              <div class="row w-100">
                                    <h5><?php echo $rows['brand_name']?></h5>
                              </div>
                              <div class="row w-100">
                                    <h5><?php echo $rows['category_name']?></h5>
                              </div>
                              <div class="row w-100">
                                    <h5><?php echo $rows['category_name']?></h5>
                              </div>
                              <br>
                              <div class="row w-100">
                                    <h5>Description</h5>
                              </div>
                              <div class="row">
                                    <textarea style="width: 100%; height: 500px" name="description" cols="40" rows="5" placeholder="Product Name" disabled><?php echo $rows['description']?></textarea>
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