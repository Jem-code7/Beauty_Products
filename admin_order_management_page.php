<?php
      include_once "./main_template/metadata.php";
      include_once './eventhandler_DB/login-checker.php';
?>
<body>
      <?php include_once './section_template/admin_header.php'?>

            <section class="main-content grad-pink-cream" style="padding-bottom: 10%;">
                  <div class="mx-5">
                        <h1><strong>Manage Order</strong></h1>

                        <br><br>
                        <a href=""><button class="btn btn-warning">Add Order</button></a>
                        <br><br><br>
                        <table style="width: 100%;">
                              <tr>
                                    <th>S.N.</th>
                                    <th>Code</th>
                                    <th>Product Name</th>
                                    <th>Image</th>
                                    <th>Stock Location</th>
                                    <th>Quantity</th>
                                    <th>Sale</th>
                                    <th>Unit Price</th>
                                    <th>Actions</th>
                              </tr>
                              <?php                             
                              if ($res=mysqli_query($db->con, "SELECT * FROM tbl_order")) :
                                    if (mysqli_num_rows($res)>0) {
                                          $i = 1;
                                          while ($rows=mysqli_fetch_assoc($res)) :
                                                ?>
                                                <tr>
                                                      <td><?php echo ($i+1)?> </td>
                                                      <td>Test</td>
                                                      <td>Test</td>
                                                      <td>Test</td>
                                                      <td>Test</td>
                                                      <td>Test</td>
                                                      <td>Test</td>
                                                      <td>Test</td>
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
                  </div>
            </section>

            <?php include './section_template/footer_footer.php' ?>

            <?php include_once './main_template/script.php'; ?>
      </section>
</body>
</html>