<?php
      include_once "./main_template/metadata.php";
      include_once './eventhandler_DB/login-checker.php';
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
                              <th>Stock Location</th>
                              <th>Quantity Stock</th>
                              <th>Sale</th>
                              <th>Unit Price</th>
                              <th>Actions</th>
                        </tr>
                        <?php                             
                              if ($res=mysqli_query($db->con, "SELECT * FROM tbl_products")) :
                                    if (mysqli_num_rows($res)>0) {
                                          $i = 1;
                                          while ($rows=mysqli_fetch_assoc($res)) :
                                                ?>
                                                <tr>
                                                      <td><?php echo $i?> </td>
                                                      <td>Test</td>
                                                      <td><?php echo $rows['name']?></td>
                                                      <td>Test</td>
                                                      <td>Test</td>
                                                      <td><?php echo $rows['stock']?></td>
                                                      <td>Test</td>
                                                      <td>$ <?php echo $rows['price']?></td>
                                                      <td>
                                                            <a href="<?php if ($rows['item_id'] != 1) echo './add_item.php?use=Update&id='.$rows['item_id']?>" class="btn btn-secondary">Update</a>
                                                            <a href="<?php if ($rows['item_id'] != 1) echo ''?>" class="btn btn-danger">Delete</a>
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