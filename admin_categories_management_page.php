<?php
      include_once "./main_template/metadata.php";
      include_once './eventhandler_DB/login-admin-checker.php';
?>
<body>
      <?php include_once './section_template/admin_header.php'?>

            <section class="main-content grad-pink-cream" style="padding-bottom: 10%;">
                  <div class="mx-5">
                        <h1><strong>Manage Categories</strong></h1>

                        <br><br>
                        <a href=""><button class="btn btn-warning">Add Category</button></a>
                        <br><br><br>
                        <table style="width: 100%;">
                              <tr>
                                    <th style="width: 5%;">S.N.</th>
                                    <th style="width: 30%;">Category</th>
                                    <th style="width: 50%;">Description</th>
                                    <th style="width: 15%;">Actions</th>
                              </tr>
                              <?php                             
                              if ($res=mysqli_query($db->con, "SELECT * FROM tbl_categories WHERE active=1")) :
                                    if (mysqli_num_rows($res)>0) {
                                          $i = 1;
                                          while ($rows=mysqli_fetch_assoc($res)) :
                                                ?>
                                                <tr>
                                                      <td><?php echo ($i+1)?> </td>
                                                      <td><?php echo $rows['category_name']?></td>
                                                      <td style="display: block; height: 100px; overflow-y: auto"><?php
                                                            $pieces = explode(" ", $rows['description']);
                                                            $first_part = implode(" ", array_splice($pieces, 0, 1));
                                                            $other_part = implode(" ", array_splice($pieces, 1)); 
                                                            echo $other_part;
                                                      ?></td>
                                                      <td>
                                                            <a href="" class="btn btn-secondary">Update</a>
                                                            <a href="" class="btn btn-danger">Delete</a>
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

                        <br><br><br>
                        <h2 class="text-center">Deactivated</h2>

                        <table style="width: 100%;">
                              <tr>
                                    <th style="width: 5%;">S.N.</th>
                                    <th style="width: 30%;">Category</th>
                                    <th style="width: 50%;">Description</th>
                                    <th style="width: 15%;">Actions</th>
                              </tr>
                              <?php                             
                              if ($res=mysqli_query($db->con, "SELECT * FROM tbl_categories WHERE active=0")) :
                                    if (mysqli_num_rows($res)>0) {
                                          $i = 1;
                                          while ($rows=mysqli_fetch_assoc($res)) :
                                                ?>
                                                <tr>
                                                      <td><?php echo ($i+1)?> </td>
                                                      <td><?php echo $rows['category_name']?></td>
                                                      <td style="display: block; height: 100px; overflow-y: auto"><?php
                                                            $pieces = explode(" ", $rows['description']);
                                                            $first_part = implode(" ", array_splice($pieces, 0, 1));
                                                            $other_part = implode(" ", array_splice($pieces, 1)); 
                                                            echo $other_part;
                                                      ?></td>
                                                      <td>
                                                            <a href="" class="btn btn-secondary">Update</a>
                                                            <a href="" class="btn btn-success">Ractivate</a>
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
      </section>
</body>
</html>