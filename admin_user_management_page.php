<?php
      include_once "./main_template/metadata.php";
      include_once './eventhandler_DB/login-admin-checker.php';
?>
<body>
      <?php include_once './section_template/admin_header.php'?>

      <section class="main-content grad-pink-cream pb-5">
            <div class="mx-5">
                  <h1><strong>Manage User</strong></h1>

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
                  <a href="./add_user.php?use=Add"><button class="btn btn-warning">Add User</button></a>
                  <br><br><br>
                  <table style="width: 100%;">
                        <tr>
                              <th>S.N.</th>
                              <th>Type</th>
                              <th>Username</th>
                              <th>Name</th>
                              <th>Gender</th>
                              <th>Birth Date</th>
                              <th>Age</th>
                              <th>Address</th>
                              <th>Phone Number</th>
                              <th>Email</th>
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
                                                      <td><?php echo ($rows['type'])? "Distributor" : "Re-Seller"?></td>
                                                      <td><?php echo $rows['username']?></td>
                                                      <td><?php echo $rows['first_name']." ".$rows['last_name']?></td>
                                                      <td><?php echo ($rows['gender'])? "Male" : "Female"?></td>
                                                      <td><?php echo $rows['birth_date']?></td>
                                                      <td><?php 
                                                            $date = date_format(date_create($rows['birth_date']), 'm/d/Y');
                                                            $birthDate = explode('/', $date);
                                                            echo (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")? ((date("Y") - $birthDate[2]) - 1) : (date("Y") - $birthDate[2])); 
                                                      ?></td>
                                                      <td><?php echo $rows['address']?></td>
                                                      <td><?php echo $rows['phone_number']?></td>
                                                      <td><?php echo $rows['email']?></td>
                                                      <td>
                                                            <a href="./add_user.php?use=Update&id=<?php echo $rows['user_id']?>" class="btn btn-secondary">Update</a>
                                                            <a href="<?php echo './delete_function.php?id_db=user_id&id='.$rows['user_id'].'&table=tbl_user&url=admin_user_management_page.php'?>" class="btn btn-danger">Delete</a>
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