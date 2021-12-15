<?php
      include_once "./main_template/metadata.php";
      include_once './eventhandler_DB/login-admin-checker.php';
?>
<body>
      <?php include_once './section_template/admin_header.php'?>

      <section class="main-content grad-pink-cream pb-5">
            <div class="mx-5">
                  <h1><strong>Manage Inventory</strong></h1>

                  <?php
                        if(isset($_SESSION['result'])){
                              echo $_SESSION['result'];
                              unset($_SESSION['result']);
                        }

                        if(isset($_SESSION['profile_upload'])){
                              echo $_SESSION['profile_upload'];
                              unset($_SESSION['profile_upload']);
                        }
                  ?>

                  <br><br>
                  <a href="./add_item.php?use=Add"><button class="btn btn-warning">Add Item</button></a>
                  <br><br><br>
                  <table style="width: 100%;">
                        <tr>
                              <th>S.N.</th>
                              <th>Code</th>
                              <th>Product Name</th>
                              <th>Image</th>
                              <th>Description</th>
                              <th>Category</th>
                              <th>Brand</th>
                              <th>Highlight</th>
                              <th>Quantity Stock</th>
                              <th>Sale</th>
                              <th>Unit Price</th>
                              <th>Actions</th>
                        </tr>
                        <?php                             
                              if ($res=mysqli_query($db->con, "SELECT tbl_products.*, tbl_brands.brand_name, tbl_categories.category_name FROM ((tbl_products INNER JOIN tbl_brands ON tbl_brands.brand_id=tbl_products.brand_id) INNER JOIN tbl_categories ON tbl_categories.category_id=tbl_products.category_id)")) :
                                    if (mysqli_num_rows($res)>0) {
                                          $i = 1;
                                          while ($rows=mysqli_fetch_assoc($res)) :
                                                ?>
                                                <tr>
                                                      <td><?php echo $i?> </td>
                                                      <td><?php echo $rows['code']?></td>
                                                      <td><?php echo $rows['name']?></td>
                                                      <td><img src="./img/Profiles/<?php echo $rows['image']?>" alt="" style="width:50px; height:50px"></td>
                                                      <td><?php echo $rows['description']?></td>
                                                      <td><?php echo $rows['category_name']?></td>
                                                      <td><?php echo $rows['brand_name']?></td>
                                                      <td><?php echo $rows['highlight']?></td>
                                                      <td><?php echo $rows['stock']?></td>
                                                      <td><?php echo $rows['sale']?></td>
                                                      <td>$ <?php echo $rows['price']?></td>
                                                      <td>
                                                            <a href="<?php if ($rows['item_id'] != 1) echo './add_item.php?use=Update&id='.$rows['item_id']?>" class="btn btn-secondary">Update</a>
                                                            <a href="<?php if ($rows['item_id'] != 1) echo './delete_function.php?id_db=item_id&id='.$rows['item_id'].'&table=tbl_products&url=admin_inventory_management_page.php'?>" class="btn btn-danger">Delete</a>
                                                      </td>
                                                </tr>
                                                <?php
                                                $i++;
                                          endwhile;
                                    }
                                    else { echo "<tr><td colspan='9'><div class='text-center text-danger'>No Available Item</div></td></tr>";}
                              endif;
                        ?>
                  </table>
            </div>
      </section>

      <?php include './section_template/footer_footer.php' ?>

      <?php include_once './main_template/script.php'; ?>
</body>
</html>