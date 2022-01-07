<?php
      include_once "./main_template/metadata.php";
      include_once '../eventhandler_DB/login-admin-checker.php';
?>
<body>
      <?php include_once '../section_template/admin_header.php'?>

      <section class="main-content grad-pink-cream pb-5">
            <div class="mx-5">
                  <h1><strong>Manage Inventory</strong> </h1>
                  <p><?php echo ($_GET['active'])? "Active Items": "Deactive Items" ?></p>
                  <div class="float-right">
                        <?php if($_GET['active'])echo '<a href="./admin_inventory_management_page.php?times=1&active=0"><button class="btn btn-secondary">Deactivated</button></a>'?>
                        <?php if(!$_GET['active'])echo '<a href="./admin_inventory_management_page.php?times=1&active=1"><button class="btn btn-secondary">Active</button></a>'?>
                  </div>

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
                  
                  <div class="float-right">
                        <?php if($_GET['times'] >= 1) echo '<a href="./admin_inventory_management_page.php?times='.((int)$_GET['times']-1).'&active='.$_GET['active'].'"><button class="btn btn-warning">Prev</button></a>'?>
                        &emsp;
                        <a href="./admin_inventory_management_page.php?times=<?php echo (int)$_GET['times']+1?>&active=<?php echo $_GET['active']?>"><button class="btn btn-warning">Next</button></a>
                  </div>
                  <br><br><br>
                  <table style="width: 100%; height: 100vh">
                        <tr>
                              <th>S.N.</th>
                              <th>Code</th>
                              <th>Product Name</th>
                              <th>Image</th>
                              <th style="width: 30%;">Description</th>
                              <th>Category</th>
                              <th>Brand</th>
                              <th>Highlight</th>
                              <th>Quantity Stock</th>
                              <th>Sale</th>
                              <th>Unit Price</th>
                              <th>Actions</th>
                        </tr>
                        <?php                  
                              $times = 25 * (int)$_GET['times'];
                              $active = $_GET['active'];
                              if ($res=mysqli_query($db->con, "SELECT tbl_products.*, tbl_brands.brand_name, tbl_categories.category_name FROM ((tbl_products INNER JOIN tbl_brands ON tbl_brands.brand_id=tbl_products.brand_id) INNER JOIN tbl_categories ON tbl_categories.category_id=tbl_products.category_id) WHERE tbl_products.active=$active ORDER BY tbl_products.name LIMIT $times, 15")) :
                                    if (mysqli_num_rows($res)>0) {
                                          $i = 1;
                                          while ($rows=mysqli_fetch_assoc($res)) :
                                                ?>
                                                <tr class="border">
                                                      <td>-    <?php echo $i?> </td>
                                                      <td><?php echo $rows['code']?></td>
                                                      <td><?php echo $rows['name']?></td>
                                                      <td><img src="<?php echo (isset($rows['image']))? "./../img/Profiles/".$rows['image'] : "./img/Placeholders/No_Image_Placeholderpng.png"?>" alt="" style="width:50px; height:50px"></td>
                                                      <td style="display: block; height: 100px; overflow-y: auto"><?php
                                                            $pieces = explode(" ", $rows['description']);
                                                            $first_part = implode(" ", array_splice($pieces, 0, 1));
                                                            $other_part = implode(" ", array_splice($pieces, 1)); 
                                                            echo $other_part;
                                                      ?></td>
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

                  <div class="float-right">
                        <?php if($_GET['times'] >= 1) echo '<a href="./admin_inventory_management_page.php?times='.(($_GET['times'] >= 1)? (int)$_GET['times']-1 : "").'"><button class="btn btn-warning">Prev</button></a>'?>
                        &emsp;
                        <a href="./admin_inventory_management_page.php?times=<?php echo (int)$_GET['times']+1?>"><button class="btn btn-warning">Next</button></a>
                  </div>
                  
            </div>
      </section>

      <?php include './main_template/footer_footer.php' ?>

      <?php include_once './main_template/script.php'; ?>
</body>
</html>