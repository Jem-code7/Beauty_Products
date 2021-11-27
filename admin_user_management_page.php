<?php
      include_once "./main_template/metadata.php";
      include_once './eventhandler_DB/login-checker.php';
?>
<body>
      <?php include_once './section_template/admin_header.php'?>

      <section class="main-content grad-pink-cream pb-5">
            <div class="mx-5">
                  <h1><strong>Manage User</strong></h1>

                  <br><br>
                  <a href=""><button class="btn btn-warning">Add User</button></a>
                  <br><br><br>
                  <table style="width: 100%;">
                        <tr>
                              <th>S.N.</th>
                              <th>Name</th>
                              <th>Gender</th>
                              <th>Birth Date</th>
                              <th>Age</th>
                              <th>Address</th>
                              <th>Number</th>
                              <th>Date</th>
                              <th>Actions</th>
                        </tr>
                        <?php                             
                              if ($res=mysqli_query($db->con, "SELECT * FROM tbl_user")) :
                                    if (mysqli_num_rows($res)>0) {
                                          $i = 1;
                                          while ($rows=mysqli_fetch_assoc($res)) :
                                                ?>
                                                <tr>
                                                      <td><?php echo $i?> </td>
                                                      <td><?php echo $rows['first_name']." ".$rows['last_name']?></td>
                                                      <td>Test</td>
                                                      <td>Test</td>
                                                      <td>Test</td>
                                                      <td><?php echo $rows['address']?></td>
                                                      <td><?php echo $rows['phone_number']?></td>
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
</body>
</html>