<?php
      include_once "./main_template/metadata.php";
      include_once './eventhandler_DB/login-admin-checker.php';

      $use = (isset($_GET['use']))? $_GET['use']:"";

      if (isset($_POST['submit'])){
            $id = $_GET['id'];

            $name = $_POST['item_name'];
            $code = $_POST['code'];
            $description = $_POST['description'];
            $stock = $_POST['stock'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $highlight = $_POST['highlight'];
            $brand_id = $_POST['brand'];
            $category_id = $_POST['category'];

            $image_name = $_FILES['product_img']['name'];
            $image_upload = false;

            if($image_name){
                  
                  $source_path = $_FILES['product_img']['tmp_name'];
                  $image_name="Profile Image - ".rand().".".end(explode(".", $image_name));
                  $destination_path = './img/Profiles/'.$image_name;

                  if(!move_uploaded_file($source_path, $destination_path))
                  {
                        $_SESSION['profile_upload']="<div class='error'>Fail to Upload Image</div>";
                  }

                  $image_upload = true;
            }
            
            $sql = (($use == "Add")? "INSERT INTO" : "UPDATE")
                  ." tbl_products SET name='$name', description='$description', stock='$stock', price='$price', category_id='$category_id', brand_id='$brand_id', highlight='$highlight', sale='$sale', code='$code'"
                  .(($image_upload)? ", image='$image_name'" : "")
                  .(($use == "Add")? "": "WHERE item_id='$id'");

            $_SESSION['result']=(mysqli_query($db->con, $sql))? 
                  "<div class='success'>Item ".$use." Successfully</div>":
                  "<div class='error'>Fail to ".$use." Item</div>";
            header("location:".$homeurl.'admin_inventory_management_page.php');
      }

?>

<body>
<?php include_once './section_template/admin_header.php'?>
      
      <section class="grad-pink-cream pb-5">
            <div class="mx-5 pt-3">
                  <form action="" method="post"  enctype="multipart/form-data" class="container">
                        <h1><strong><?php echo $use." Item"?></strong></h1>
                        <?php
                              $id = null;

                              if ($use == "Update")
                              {
                                    $id = $_GET['id'];
                                    $rows = mysqli_fetch_assoc(mysqli_query($db->con,"SELECT * FROM tbl_products WHERE item_id=$id"));
                              }
                        ?>
                        <div class="shadow-lg p-3 mb-5 bg-white rounded table">
                              <table class="tbl w-100">
                                    <tr>
                                          <td><img src="<?php echo ($rows['image'] != "")? 
                                                './img/Profiles/'.$rows['image']:
                                                './img/Placeholders/No_Image_Placeholderpng.png';?>" 
                                                alt="" style="width: 200px; height: 200px" id='image'></td>
                                          <td class="align-bottom">
                                                <h5>Image: </h5>
                                                <input type="file" name="product_img" onchange="readURL(this);" accept=".png, .jpg">
                                          </td>
                                    </tr>
                                    <tr>
                                          <td style="width: 10%"><h5>Product Code:</h5></td>
                                          <td><input style="width: 100%" type="text" name="code" placeholder="Product Code" value="<?php if($use=="Update") echo $rows['code']?>" required></td>
                                    </tr>
                                    <tr>
                                          <td style="width: 10%"><h5>Product Name:</h5></td>
                                          <td><input style="width: 100%" type="text" name="item_name" placeholder="Product Name" value="<?php if($use=="Update") echo $rows['name']?>" required></td>
                                    </tr>
                                    <tr>
                                          <td><h5>Highlight:</h5></td>
                                          <td>
                                                <input type="radio" name="highlight" value=1 <?php if($use=="Update" && $rows['highlight'] == 1) echo "checked";?> required>True
                                                <input class="ml-5" type="radio" name="highlight" value=0 <?php if($use=="Update" && $rows['highlight'] == 0) echo "checked";?>>False
                                          </td>
                                    </tr>
                                    <tr>
                                          <td>Brand: </td>
                                          <td>
                                                <select name="brand" id="">
                                                      <?php 
                                                            $sql = mysqli_query($db->con,"SELECT * FROM tbl_brands");
                                                            $n=1;

                                                            if(mysqli_num_rows($sql)){
                                                                  while($cat = mysqli_fetch_assoc($sql)) {
                                                                  $n++;
                                                                  echo "<option value='".$cat['brand_id']."'>".$cat['brand_name']."</option>";
                                                                  }
                                                            }else
                                                                  echo "<option value='0'>No Category Available</option>";
                                                      ?>
                                                </select>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td>Category: </td>
                                          <td>
                                                <select name="category" id="">
                                                      <?php 
                                                            $sql = mysqli_query($db->con,"SELECT * FROM tbl_categories");
                                                            $n=1;

                                                            if(mysqli_num_rows($sql)){
                                                                  while($cat = mysqli_fetch_assoc($sql)) {
                                                                  $n++;
                                                                  echo "<option value='".$cat['category_id']."'>".$cat['category_name']."</option>";
                                                                  }
                                                            }else
                                                                  echo "<option value='0'>No Category Available</option>";
                                                      ?>
                                                </select>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td><h5>Description:</h5></td>
                                          <td>
                                                <textarea name="description" id="" cols="30" rows="5" placeholder="Description." ><?php if($use=="Update") echo $rows['description']?></textarea>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td style="width: 10%"><h5>Stock:</h5></td>
                                          <td><input style="width: 100%" type="number" name="stock" placeholder="Stock" value="<?php if($use=="Update") echo $rows['stock']?>" required></td>
                                    </tr>
                                    <tr>
                                          <td style="width: 10%"><h5>Sale:</h5></td>
                                          <td><input style="width: 100%" type="number" name="sale" placeholder="Sale" value="<?php if($use=="Update") echo $rows['sale']?>" required></td>
                                    </tr>
                                    <tr>
                                          <td style="width: 10%"><h5>Price:</h5></td>
                                          <td><input style="width: 100%" type="number" name="price" placeholder="Price" value="<?php if($use=="Update") echo $rows['price']?>" required></td>
                                    </tr>
                                    <br>
                                    <tr>
                                          <td></td>
                                          <td colspan="2" class="text-right">
                                                <a href="./admin_inventory_management_page.php"><input value="Cancel" class="btn-secondary rounded" style="width: 60px"></a>
                                                <input type="submit" name="submit" value="Submit" class="btn-primary rounded">
                                          </td>
                                    </tr>
                              </table>
                        </div>
                  </form>
            </div>
      </section>
      
      <?php include './section_template/footer_footer.php' ?>
      </main>

      <?php include_once './main_template/script.php'; ?>
      <script src="./js/image_upload.js"></script>
    
</body>
</html>
